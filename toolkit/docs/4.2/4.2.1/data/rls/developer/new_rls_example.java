/* Note that using the default class is contraindicated. */

/**
 * This code utilizes features available in Java 1.5. The Globus Toolkit 4 Java
 * API was developed using Java 1.4, which did not have these features. IDEs,
 * such as Eclipse, can complain about type safety for API methods returning
 * lists. These may be ignored.
 */

import static java.lang.System.err;
import static java.lang.System.out;

import java.net.MalformedURLException;
import java.util.ArrayList;
import java.util.List;
import org.ietf.jgss.GSSCredential;

import org.globus.replica.rls.Administrative;
import org.globus.replica.rls.AttributeResult;
import org.globus.replica.rls.CatalogQuery;
import org.globus.replica.rls.ConfigurationOption;
import org.globus.replica.rls.LocalReplicaCatalog;
import org.globus.replica.rls.Mapping;
import org.globus.replica.rls.MappingResult;
import org.globus.replica.rls.RLSAttribute;
import org.globus.replica.rls.RLSAttributeObject;
import org.globus.replica.rls.RLSConnection;
import org.globus.replica.rls.RLSConnectionSource;
import org.globus.replica.rls.RLSException;
import org.globus.replica.rls.RLSStats;
import org.globus.replica.rls.RLSStatusCode;
import org.globus.replica.rls.Rename;
import org.globus.replica.rls.RenameResult;
import org.globus.replica.rls.Results;
import org.globus.replica.rls.SimpleCatalogQuery;
import org.globus.replica.rls.impl.SimpleRLSConnectionSource;
import org.globus.util.GlobusURL;

/**
 * Class to exercise the functionality of the RLS API for a Local Replica
 * Catalog (LRC). Patterned after testrls.java, but using the new classes
 * released with Globus Toolkit 4.
 */
public class ExerciseRlsApi
{
	private static String urlString = "rlsn://localhost/"; // default value
	private static GlobusURL rlsServerUrl;
	// Note that this exercise assumes an RLS server that is configured to not
	// use any security mechanisms. This object is left as NULL and is ignored
	// by the connection code. If the RLS server you exercise uses security, you
	// will need to create an appropriate instance for this class.
	private static GSSCredential defaultCredential;

	private static RLSConnection connection = null;
	private static LocalReplicaCatalog catalog = null;
	private static Administrative admin = null;

	/**
	 * Test driver. Opens connection, calls routines to perform tests, and then
	 * closes the connection.
	 * 
	 * @param args
	 *            Argument is a URL for the RLS server to exercise. Only
	 *            required if the local host is not running the server.
	 */
	public static void main(String[] args) {
		if (args.length != 0) {
			urlString = args[0];
		}
		try {
			rlsServerUrl = new GlobusURL(urlString);
			out.printf("Attempting to connect using URL %s\n\n", rlsServerUrl.getURL());
			connection = makeConnection(rlsServerUrl, defaultCredential);
			// Create the objects to implement the connectivity services.
			admin = connection.admin();
			catalog = connection.catalog();
			out.printf("Connected to %s\n", rlsServerUrl.getURL());
		} catch (MalformedURLException e1) {
			err.printf("Bad URL: %s\n", urlString);
			e1.printStackTrace();
			System.exit(1);
		} catch (RLSException e1) {
			err.println("RLSException!");
			e1.printStackTrace();
			System.exit(1);
		}

		exerciseAdmin();

		exerciseCatalog();

		try {
			connection.close();
			out.println("End of Exercise");
		} catch (RLSException e) {
			err.println("Unexpected error when closing connection!");
			e.printStackTrace();
		}

	}

	/*
	 * Method runs tests that use Administrative interface.
	 */
	private static void exerciseAdmin() {
		try {
			out.println("Exercising RLS stats function");
			statsQuery(admin);
			out.println("\nQuerying server configuration");
			configQuery(admin);
			out.println("Setting updateint configuration option\nSending" +
						" \"lrc_update_ll\" and \"321\"");
			admin.setConfiguration("lrc_update_ll", "321");
			out.println("\nQuerying server configuration again for new setting.");
			configQuery(admin);
		} catch (RLSException e2) {
			err.println("RLSException exercising Administrative interface!");
			e2.printStackTrace();
		}
	}

	/*
	 * Method runs tests using Local Replica Catalog and Administrative
	 * interfaces.
	 */
	private static void exerciseCatalog() {
		List<RLSAttribute>attrs = new ArrayList<RLSAttribute>();
		List<RLSAttributeObject>attrObjs = new ArrayList<RLSAttributeObject>();

		List<Mapping>mappings = new ArrayList<Mapping>();
		List<Mapping>mods = new ArrayList<Mapping>();
		mappings.add(new Mapping("java/lfn1", "java/pfn1"));

		try {
			out.println("\nExercising LRC add operation");
			insertMappings(catalog,mappings);
			out.println("Exercising LRC delete operation");
			deleteMappings(catalog,mappings);

			// Add some additional mappings to try
			mappings.add(new Mapping("java/lfn2", "java/pfn2"));
			mappings.add(new Mapping("java/lfn3", "java/pfn3"));
			mappings.add(new Mapping("java/lfn4", "java/pfn4"));
			mappings.add(new Mapping("java/lfn5", "java/pfn5"));
			out.println("\nExercising LRC add operation with multiple mappings");
			insertMappings(catalog,mappings);
			// delete them later, after trying to read back.
			mods.add(new Mapping("java/lfn1", "java/pfn2"));
			mods.add(new Mapping("java/lfn1", "java/pfn0"));
			modifyMappings(catalog, mods);
		} catch (RLSException e3) {
			err.println("Exception from an add or delete operation!");
			e3.printStackTrace();
		}

		try {
			out.println("Exercising add/modify/remove attribute operations");
			// Create some attributes
			RLSAttribute testAttrInt = new RLSAttribute("testAttrInt",
														RLSAttribute.LRC_PFN,
														RLSAttribute.INT,42);
			RLSAttribute testAttrStr = new RLSAttribute("testAttrStr",
														RLSAttribute.LRC_LFN,
														"testAttrStr");
			// Define them in the RLS
			attrs.add(testAttrInt); attrs.add(testAttrStr);
			defineCatalogAttributes(catalog, attrs);

			// Add them to some key
			RLSAttributeObject raoInt = new RLSAttributeObject(testAttrInt,"java/pfn1");
			RLSAttributeObject raoStr = new RLSAttributeObject(testAttrStr,"java/lfn1");
			attrObjs.add(raoInt); attrObjs.add(raoStr);
			addCatalogAttributes(catalog,attrObjs);

		} catch (RLSException e) {
			err.println("Attribute test failed.");
			e.printStackTrace();
		}

		try {
			out.println("Exercising some Simple Catalog Queries");
			simpleCatalogQueryByName(catalog, "java/lfn1");
			simpleCatalogQueryByWildcard(catalog,"java/lfn%");
		} catch (RLSException e) {
			err.println("SimpleCatalogQuery failed");
			e.printStackTrace();
		}


		try {
			out.println("Exercising rename logical names operation");
			List<Rename> renames = new ArrayList<Rename>();
			List<Rename> restores = new ArrayList<Rename>();
			renames.add(new Rename("should/fail/java/lfn2","rename/java/lfn2"));
			renames.add(new Rename("java/lfn4","rename/java/lfn4"));
			restores.add(new Rename("rename/java/lfn2","java/lfn2"));
			restores.add(new Rename("rename/java/lfn4","java/lfn4"));
			renameLogicalNames(catalog, renames);
			simpleCatalogQueryByWildcard(catalog,"rename/%");
			out.println("Restoring original logical names");
			renameLogicalNames(catalog,restores);
		} catch (RLSException e3) {
			err.println("Exception during logical rename tests");
			e3.printStackTrace();
		}

		try {
			out.println("Exercising rename target names operation");
			List<Rename>renames = new ArrayList<Rename>();
			List<Rename>restores = new ArrayList<Rename>();
			renames.add(new Rename("should/fail/java/pfn2","rename/java/pfn2"));
			renames.add(new Rename("java/pfn4","rename/java/pfn4"));
			restores.add(new Rename("rename/java/pfn2","java/pfn2"));
			restores.add(new Rename("rename/java/pfn4","java/pfn4"));
			renameTargetNames(catalog,renames);
			simpleCatalogQueryByName(catalog, "java/lfn4");
			out.println("Restoring original target names");
			renameTargetNames(catalog,restores);
		} catch (RLSException e3) {
			err.println("Exception during target rename tests");
			e3.printStackTrace();
		}
		try {
			out.println("Cleaning up our additions");
			// Cleanup after ourselves
			removeCatalogAttributes(catalog, attrObjs);
			undefineCatalogAttributes(catalog, attrs);
			deleteMappings(catalog,mappings);
			deleteMappings(catalog, mods);
		} catch (RLSException e2) {
			err.println("Cleanup failed");
			e2.printStackTrace();
		}

	}

	/* *****
	 * Methods to access different aspects of the functionality.
	 * ***** */

	private static RLSConnection makeConnection(GlobusURL globusURL, 
												GSSCredential gssCredential)
		throws RLSException {
		RLSConnectionSource source = new SimpleRLSConnectionSource();
		return source.connect(globusURL, gssCredential);
	}

	/*
	 * Use the Administrative object to get configuration parameters.
	 * Note that the JavaDocs imply that "all" will retrieve all parameters,
	 * but it looks like that's wrong; a null is what it wants.
	 */
	private static Administrative configQuery(Administrative admin)
		throws RLSException {
		out.println();
		List<ConfigurationOption> configuration = admin.getConfiguration(null);
		for (ConfigurationOption option : configuration) {
			out.printf("%s = %s\n", 
					   option.getName(), 
					   option.getValue());
		}
		out.println();
		return admin;
	}

	private static Administrative statsQuery(Administrative admin)
		throws RLSException {
		out.println();
		RLSStats stats = admin.stats();
		out.printf("  Version: %s\n", stats.Version);
		out.printf("  Uptime: %d\n", stats.Uptime);
		out.printf("  Flags: 0x%X\n", stats.Flags);
		out.printf("  BloomFilter Update: %d\n", stats.LRCBloomFilterUI);
		out.printf("  LFNList Update: %d\n", stats.LRCLFNListUI);
		out.printf("  LRC NumLFN: %d\n", stats.LRCNumLFN);
		out.printf("  LRC NumPFN: %d\n", stats.LRCNumPFN);
		out.printf("  LRC NumMAP: %d\n", stats.LRCNumMAP);
		out.printf("  RLI NumLFN: %d\n", stats.RLINumLFN);
		out.printf("  RLI NumLRC: %d\n", stats.RLINumLRC);
		out.printf("  RLI NumMAP: %d\n", stats.RLINumMAP);
		out.printf("  RLI NumSender: %d\n", stats.RLINumSender);
		out.println();
		return admin;
	}

	private static void defineCatalogAttributes(LocalReplicaCatalog catalog, 
												List<RLSAttribute>attrs)
		throws RLSException {
		out.println("Attempting to define new attributes:");
		for (RLSAttribute attr : attrs) {
			out.printf("\t%s\n", attr.toString());
		}
		List<AttributeResult> results = catalog.defineAttributes(attrs);
		if (results.size() > 0) {
			out.println("These attribue(result.getRC()));
           }
       } else {
           out.println("All attribute definitions succeeded.");
       }
   }

   private static void undefineCatalogAttributes(LocalReplicaCatalog catalog, 
                                                 List<RLSAttribute>attrs)
   throws RLSException {
       out.println("Attempting to undefine the new attributes:");
       for (RLSAttribute attr : attrs) {
           out.printf("\t%s\n", attr.toString());
       }
       List<AttributeResult> results = catalog.undefineAttributes(attrs, true);
       if (results.size() > 0) {
           out.println("These attribute undons succeeded.");
       }
   }

   private static void addCatalogAttributes(LocalReplicaCatalog catalog, 
                                            List<RLSAttributeObject>attrObjs)
   throws RLSException {
       out.println("Attempting to add new attributes:");
       for (RLSAttributeObject rao : attrObjs) {
           out.printf("\t%s\n", rao.attr.toString());
       }
       List<AttributeResult> results = catalog.addAttributes(attrObjs);
       if (results.size() > 0) {
           out.println("These attribute additions failed:");
           for (AttributeResult re                                     List<RLSAttributeObject>attrObjs)
   throws RLSException {
       out.println("Attempting to remove testcase attributes:");
       for (RLSAttributeObject rao : attrObjs) {
           out.printf("\t%s\n", rao.attr.toString());
       }
       List<AttributeResult> results = catalog.removeAttributes(attrObjs);
       if (results.size() > 0) {
           out.println("These attribute removals failed:");
           for (AttributeResult result : results) {
               out.printf("\tKey=%s : Name=%s for (%d) %s\n",
                       d these mappings:");
			for (Mapping mapping : mappings) {
				out.printf("\t%s => %s\n", mapping.getLogical(), mapping.getTarget());
			}
			List<MappingResult>failures = catalog.createMappings(mappings);
			if (failures.size() == 0) {
				out.println("All createMappings succeeded.\n");
			} else {
				out.println("createMappings failed for:");
				for (MappingResult mr : failures) {
					out.printf("\t%s => %s : (%d) %s\n", 
							   mr.getLogical(), mr.getTarget(),
							   mr.getRC(), RLSStatusCode.toMessage(mr.getRC()));
				}
			}
		}

		private static void modifyMappings(LocalReplicaCat= catalog.addMappings(mods);
										   if (failures.size() == 0) {
											   out.println("All addMappings succeeded.\n");
										   } else {
											   out.println("addMappings failed for:");
											   for (MappingResult mr : failures) {
												   out.printf("\t%s => %s : (%d) %s\n", 
															  mr.getLogical(), mr.getTarget(),
															  mr.getRC(), RLSStatusCode.toMessage(mr.getRC()));
											   }
										   }        
										   }

			private static void deleteMappings(LocalReplicaCatalog catalog,
											   s failed for:");
           for (MappingResult mr : failures) {
               out.printf("\t%s => %s : (%d) %s\n", 
                          mr.getLogical(), mr.getTarget(),
                          mr.getRC(), RLSStatusCode.toMessage(mr.getRC()));
           }
       }
   }

   private static void simpleCatalogQueryByName(LocalReplicaCatalog catalog,
                                                String queryName) 
   throws RLSException {

       out.printf("\nTrying SimleCatalogQuery by MappingLFN for %s\n", queryName);
       CatalogQuery catalogQuery = 
           new SimpleCatalogQuery(SimpleCatalogQuery.queryMappingsByLogicalName,
                  continue;
               }
               out.printf("\tlogicalName=%s\n\ttargetNameL=%s\n\n", 
                          ((MappingResult)object).getLogical(),
                          ((MappingResult)object).getTarget());
           }
       }

   }

   private static void simpleCatalogQueryByWildcard(LocalReplicaCatalog catalog, 
                                                    String queryString)
   throws RLSException {
       out.printf("\nTrying SimleCatalogQuery by WildcardLFN for %s\n", queryString);
       CatalogQuery catalogQuery = 
           new SimpleCatalogQuery(SimpleCatalogQuery.queryMappingsByLogicalNamePattern,
                                  queryString,
                                  null);
     lt.getRC() != RLSStatusCode.RLS_SUCCESS) {
                   continue;
               }
               out.printf("\tlogicalName=%s\n\ttargetNameL=%s\n\n", 
                          result.getLogical(),
                          result.getTarget());                   
           }
       }
       out.flush();
   }

   private static void renameLogicalNames(LocalReplicaCatalog catalog,
                                          List<Rename> renames)
   throws RLSException {
       out.println("\nAttempting these logical name changes:");
       for (Rename rename : renames) {
           out.printf("\t%s => %s\n", rename.getFrom(), rename.getTo());
       }
       List<RenameResult>results = catalog.renameLogicalNames(renames);
       if (results.size() > 0) {
           out.println("Rename failed for these:");
           for (RenameResult result : results) {
               out.printf("\tLFN %s not renamed to %s: error (%d) %s\n",
                          result.getFrom(), result.getTo(), 
                          result.getRC(), RLSStatusCode.toMessage(result.getRC()));
           }
       }
   }

   private static void renameTargetNames(LocalReplicaCatalog catalog,
                                         List<Rename> renames)
   throws RLSException {
       out.println("\nAttempting these target name changes:");
       for (Rename rename : renames) {
           out.printf("\t%s => %s\n", rename.getFrom(), rename.getTo());
       }
       List<RenameResult>results = catalog.renameTargetNames(renames);
       if (results.size() > 0) {
           out.println("Rename failed for these:");
           for (RenameResult result : results) {
               out.printf("\tLFN %s not renamed to %s: error (%d) %s\n",
                          result.getFrom(), result.getTo(), 
                          result.getRC(), RLSStatusCode.toMessage(result.getRC()));
           }
       }
   }
}
