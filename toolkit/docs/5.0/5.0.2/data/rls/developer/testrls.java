import java.util.*;
import org.globus.replica.rls.*;

public class testrls {
  public static void main(String args[]) throws RLSException {
    RLSClient rls;
    RLSClient.LRC lrc;
    RLSClient.RLI rli;
    ArrayList list;
    ArrayList rlist;
    Iterator iter;
    RLSAttribute a;
    RLSAttributeObject ao;
    RLSRLIInfo rliinfo;
    RLSLRCInfo lrcinfo;

    if (args.length == 0) {
      System.out.println("Connecting to localhost");
      rls = new RLSClient();
    } else {
      System.out.println("Connecting to " + args[0]);
      rls = new RLSClient(args[0]);
    }      
    lrc = rls.getLRC();
    rli = rls.getRLI();

    // Set/get server configuration.
    System.out.println("Setting updateint configuration option");
    rls.SetConfiguration("lrc_update_ll", "123");
    System.out.println("Getting server configuration");
    list = rls.GetConfiguration(null);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2 str2 = (RLSString2) iter.next();
      System.out.println("  " + str2.s1 + ": " + str2.s2);
    }

    // Create mappings java/lfn1 -> java/pfn1, java/lfn1 -> java/pfn2.
    System.out.println("Testing LRC create/add operations");
    lrc.create("java/lfn1", "java/pfn1");
    lrc.add("java/lfn1", "java/pfn2");
    System.out.println("  Created java/lfn1 -> java/{pfn1,pfn2} mappings");

    // Query the mappings for java/lfn1 just created.
    System.out.println("Testing LRC query operations");
    list = lrc.getPFN("java/lfn1");
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2 str2 = (RLSString2) iter.next();
      System.out.println("  LRCGetPFN(\"" + str2.s1 + "\"): " + str2.s2);
    }

    System.out.println("Testing LRC wildcard query operation");
    try {
      RLSOffsetLimit o = new RLSOffsetLimit(0,0);
      while (true) {
        list = lrc.getPFNWC("*", o);
	iter = list.iterator();
	while (iter.hasNext()) {
	  RLSString2 str2 = (RLSString2) iter.next();
	  System.out.println("  LRCGetPFNWC(\"" + str2.s1 + "\"): " + str2.s2);
	}
	if (o.offset == -1)
	  break;
      }
    } catch (RLSException e) {
      System.out.println("  " + e);
    }

    System.out.println("Testing RLI wildcard query operation");
    try {
      list = rli.getLRCWC("*", null);
      iter = list.iterator();
      while (iter.hasNext()) {
	RLSString2 str2 = (RLSString2) iter.next();
	System.out.println("  RLIGetLRCWC(\"" + str2.s1 + "\"): " + str2.s2);
      }
    } catch (RLSException e) {
      System.out.println("  " + e);
    }

    // Rename LFNs
    System.out.println("Testing rename operations");
    lrc.renameLFN("java/lfn1", "renamed/java/lfn1");
    lrc.renamePFN("java/pfn1", "renamed/java/pfn1");
    lrc.renameLFN("renamed/java/lfn1", "java/lfn1");
    lrc.renamePFN("renamed/java/pfn1", "java/pfn1");
    System.out.println("  Renamed java/{lfn1|pfn1} -> renamed/java/{lfn1,pfn1} -> and back");

    System.out.println("Testing bulk update operations");
    // Bulk create
    list = new ArrayList(2);
    RLSString2 s2 = new RLSString2("blfn1", "bpfn1");
    list.add(s2);
    s2 = new RLSString2("blfn2", "bpfn2");
    list.add(s2);
    list = lrc.createBulk(list);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      System.out.println("  Bulk create failed: " + s2b.s1 + "," + s2b.s2 +
			 ": " + rls.getErrorMessage(s2b.rc));
    }

    // Bulk add
    list = new ArrayList(2);
    s2 = new RLSString2("blfn1", "bpfn1.add");
    list.add(s2);
    s2 = new RLSString2("blfn1", "bpfn2");
    list.add(s2);
    list = lrc.addBulk(list);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      if (s2b.rc != RLSClient.RLS_MAPPING_EXIST || !s2b.s1.equals("blfn1") ||
	  !s2b.s2.equals("bpfn2"))
	System.out.println("  Bulk add failed: " + s2b.s1 + "," + s2b.s2 +
			   ": " + rls.getErrorMessage(s2b.rc));
    }

    System.out.println("Testing bulk rename LFN operations");
    // Bulk rename LFN
    list = new ArrayList(2);
    s2 = new RLSString2("blfn1", "renamed/blfn1");
    list.add(s2);
    s2 = new RLSString2("blfn2", "renamed/blfn2");
    list.add(s2);
    list = lrc.renameLFNBulk(list);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      if (s2b.rc != RLSClient.RLS_SUCCESS)
	System.out.println("  Bulk rename LFN failed: " + s2b.s1 + "," + s2b.s2 +
			   ": " + rls.getErrorMessage(s2b.rc));
    }
    // Bulk rename LFN -- Back to Original
    list = new ArrayList(2);
    s2 = new RLSString2("renamed/blfn1", "blfn1");
    list.add(s2);
    s2 = new RLSString2("renamed/blfn2", "blfn2");
    list.add(s2);
    list = lrc.renameLFNBulk(list);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      if (s2b.rc != RLSClient.RLS_SUCCESS)
	System.out.println("  Bulk rename LFN failed: " + s2b.s1 + "," + s2b.s2 +
			   ": " + rls.getErrorMessage(s2b.rc));
    }

    System.out.println("Testing bulk rename PFN operations");
    // Bulk rename PFN
    list = new ArrayList(2);
    s2 = new RLSString2("bpfn1", "renamed/bpfn1");
    list.add(s2);
    s2 = new RLSString2("bpfn2", "renamed/bpfn2");
    list.add(s2);
    list = lrc.renamePFNBulk(list);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      if (s2b.rc != RLSClient.RLS_SUCCESS)
	System.out.println("  Bulk rename PFN failed: " + s2b.s1 + "," + s2b.s2 +
			   ": " + rls.getErrorMessage(s2b.rc));
    }
    // Bulk rename PFN -- Back to Original
    list = new ArrayList(2);
    s2 = new RLSString2("renamed/bpfn1", "bpfn1");
    list.add(s2);
    s2 = new RLSString2("renamed/bpfn2", "bpfn2");
    list.add(s2);
    list = lrc.renamePFNBulk(list);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      if (s2b.rc != RLSClient.RLS_SUCCESS)
	System.out.println("  Bulk rename PFN failed: " + s2b.s1 + "," + s2b.s2 +
			   ": " + rls.getErrorMessage(s2b.rc));
    }

    System.out.println("Testing bulk exists operations");
    // Bulk exists
    list = new ArrayList(2);
    list.add("blfn1");
    list.add("blfn2");
    list.add("lfn-not-expected-to-exist");    
    list = lrc.existsBulk(list, RLSAttribute.LRC_LFN);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      System.out.println("  Exists: " + s2b.s1 + ": " + rls.getErrorMessage(s2b.rc));
    }

    // Bulk query
    list = new ArrayList(2);
    list.add("bpfn1");
    list.add("bpfnx");
    list = lrc.getLFNBulk(list);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      if (s2b.rc == RLSClient.RLS_SUCCESS) {
	if (!s2b.s1.equals("blfn1") || !s2b.s2.equals("bpfn1"))
	  System.out.println("  Unexpected mapping:" + s2b.s1 + "," + s2b.s2);
      } else if (s2b.rc != RLSClient.RLS_PFN_NEXIST ||
		 !s2b.s1.equals("bpfnx") || s2b.s2 != null)
	System.out.println("  getLFN: " + s2b.s1 + "," + s2b.s2 + ": " +
			   rls.getErrorMessage(s2b.rc));
    }

    // Bulk delete
    list = new ArrayList(4);
    s2 = new RLSString2("blfn1", "bpfn1");
    list.add(s2);
    s2 = new RLSString2("blfn1", "bpfn1.add");
    list.add(s2);
    s2 = new RLSString2("blfn1", "bpfn2");
    list.add(s2);
    s2 = new RLSString2("blfn2", "bpfn2");
    list.add(s2);
    s2 = new RLSString2("blfnx", "bpfnx");
    list.add(s2);
    list = lrc.deleteBulk(list);
    iter = list.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      if (s2b.rc != RLSClient.RLS_LFN_NEXIST || !s2b.s1.equals("blfnx") ||
	  !s2b.s2.equals("bpfnx"))
	System.out.println("  Bulk delete failed: " + s2b.s1 + "," + s2b.s2 +
			   ": " + rls.getErrorMessage(s2b.rc));
    }

    // Define an int and string valued pfn attribute, add to java/pfn1.
    System.out.println("Testing LRC attribute operations");
    lrc.attributeCreate("iattr", RLSAttribute.LRC_PFN, RLSAttribute.INT);
    lrc.attributeAdd("java/pfn1", new RLSAttribute("iattr", RLSAttribute.LRC_PFN,
						 RLSAttribute.INT, 44));
    lrc.attributeCreate("sattr", RLSAttribute.LRC_PFN, RLSAttribute.STR);
    lrc.attributeAdd("java/pfn1", new RLSAttribute("sattr", RLSAttribute.LRC_PFN,
						 "a string value"));
    // Bulk attribute operations
    System.out.println("  Bulk add attributes");
    list = new ArrayList(2);
    ao = new RLSAttributeObject(new RLSAttribute("iattr", RLSAttribute.LRC_PFN, RLSAttribute.INT, 554), "java/pfn2");
    list.add(ao);
    ao = new RLSAttributeObject(new RLSAttribute("sattr", RLSAttribute.LRC_PFN, "hi"), "java/pfn2");
    list.add(ao);
    rlist = lrc.attributeAddBulk(list);
    iter = rlist.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      System.out.println("    Bulk add attr failed: " + s2b.s1 + "," + s2b.s2 +
			   ": " + rls.getErrorMessage(s2b.rc));
    }

    System.out.println("  Bulk query attributes");
    list = new ArrayList(2);
    list.add("java/pfn1");
    list.add("java/pfn2");
    rlist = lrc.attributeValueGetBulk(list, "iattr", RLSAttribute.LRC_PFN);
    iter = rlist.iterator();
    while (iter.hasNext()) {
      ao = (RLSAttributeObject) iter.next();
      if (ao.rc == RLSClient.RLS_SUCCESS)
	System.out.println("    " + ao.key + ": " + ao.attr.name + ": "+ao.attr);
      else
	System.out.println("    " + ao.key + ": " +rls.getErrorMessage(ao.rc));
    }

    System.out.println("  Bulk remove attributes");
    list = new ArrayList(2);
    ao = new RLSAttributeObject(new RLSAttribute("iattr", RLSAttribute.LRC_PFN, RLSAttribute.INT, 554), "java/pfn2");
    list.add(ao);
    ao = new RLSAttributeObject(new RLSAttribute("sattr", RLSAttribute.LRC_PFN, "hi"), "java/pfn2");
    list.add(ao);
    rlist = lrc.attributeRemoveBulk(list);
    iter = rlist.iterator();
    while (iter.hasNext()) {
      RLSString2Bulk s2b = (RLSString2Bulk) iter.next();
      System.out.println("    Bulk remove attr failed: " + s2b.s1 + "," + s2b.s2 +
			   ": " + rls.getErrorMessage(s2b.rc));
    }

    // Query newly created attributes
    System.out.println("  Getting list of defined attributes (should be iattr, sattr)");
    list = lrc.attributeGet(null, RLSAttribute.LRC_PFN);
    iter = list.iterator();
    while (iter.hasNext()) {
      a = (RLSAttribute) iter.next();
      System.out.println("    " + a.name + ": " + a.GetValTypeName());
    }

    // Modify an attribute value
    lrc.attributeModify("java/pfn1", new RLSAttribute("iattr",
						    RLSAttribute.LRC_PFN,
						    RLSAttribute.INT, 28));

    // Get sattr value for java/pfn1
    System.out.println("  Getting sattr attribute value for java/pfn1");
    list = lrc.attributeValueGet("java/pfn1", "sattr", RLSAttribute.LRC_PFN);
    iter = list.iterator();
    while (iter.hasNext()) {
      a = (RLSAttribute) iter.next();
      System.out.println("    " + a.name + ": " + a);
    }

    // Search for iattr values beteen 0 and 100
    System.out.println("  Searching for iattr values between 0 and 100");
    list = lrc.attributeSearch("iattr", RLSAttribute.LRC_PFN, RLSAttribute.OPBTW,
	   new RLSAttribute("iattr",RLSAttribute.LRC_PFN,RLSAttribute.INT,0),
	   new RLSAttribute("iattr",RLSAttribute.LRC_PFN,RLSAttribute.INT,100),
	   null);
    iter = list.iterator();
    while (iter.hasNext()) {
      ao = (RLSAttributeObject) iter.next();
      System.out.println("    " + ao.key + ": " + ao.attr.name + ": "+ao.attr);
    }

    // Remove attributes just created
    System.out.println("  Deleting attributes iattr, sattr");
    // Remove iattr from java/pfn1
    lrc.attributeRemove("java/pfn1",
		      new RLSAttribute("iattr", RLSAttribute.LRC_PFN,
				       RLSAttribute.INT));
    // Delete iattr definition
    lrc.attributeDelete("iattr", RLSAttribute.LRC_PFN, false);
    // Remove all sattr attributes plus definition
    lrc.attributeDelete("sattr", RLSAttribute.LRC_PFN, true);

    // Test LFN exists functions
    System.out.println("Testing LRC LFN exists functions");
    System.out.println("  java/lfn1: " + lrc.exists("java/lfn1",
						       RLSAttribute.LRC_LFN));
    System.out.println("  bad lfn: " + lrc.exists("bad lfn",
						       RLSAttribute.LRC_LFN));
    System.out.println("  java/lfn1,java/pfn1: " +
		       lrc.mappingExists("java/lfn1", "java/pfn1"));

    System.out.println("Testing LRC.RLIList function");
    try {
      list = lrc.rliList();
      iter = list.iterator();
      while (iter.hasNext()) {
	rliinfo = (RLSRLIInfo) iter.next();
	System.out.println("  " + rliinfo.url + " updateint " +
			   rliinfo.updateinterval + " flags " + rliinfo.flags);
	System.out.println("    lastupdate " + rliinfo.lastupdate);
      }
    } catch (RLSException e) {
      System.out.println("  " + e);
    }

    System.out.println("Testing RLI.LRCList function");
    try {
      list = rli.lrcList();
      iter = list.iterator();
      while (iter.hasNext()) {
	lrcinfo = (RLSLRCInfo) iter.next();
	System.out.println("  " + lrcinfo.url +
			   " lastupdate " + lrcinfo.lastupdate);
      }
    } catch (RLSException e) {
      System.out.println("  " + e);
    }

    System.out.println("Testing RLI.RLIList function");
    try {
      list = rli.rliList();
      iter = list.iterator();
      while (iter.hasNext()) {
	rliinfo = (RLSRLIInfo) iter.next();
	System.out.println("  " + rliinfo.url + " updateint " +
			   rliinfo.updateinterval + " flags " + rliinfo.flags);
	System.out.println("    lastupdate " + rliinfo.lastupdate);
      }
    } catch (RLSException e) {
      System.out.println("  " + e);
    }

    System.out.println("Testing RLI exists functions");
    rls.Admin(RLSClient.ADMIN_SSU);
    try { // Wait for rli update
      Thread.sleep(2000);
    } catch (Exception ex) {
    }
    System.out.println("  java/lfn1: " + rli.exists("java/lfn1",
						       RLSAttribute.RLI_LFN));
    System.out.println("  bad lfn: " + lrc.exists("bad lfn",
						       RLSAttribute.RLI_LFN));

    // Test LRC RLI update/partition functions
    System.out.println("Testing LRC RLI update functions");
    lrc.rliAdd("rls://bogushost.edu", 0, null);
    list = lrc.rliGetPart(null, null);
    iter = list.iterator();
    while (iter.hasNext()) {
      String pat;
      RLSString2 str2 = (RLSString2) iter.next();
      if (str2.s2.length() == 0)
	pat = "no pattern";
      else
	pat = str2.s2;
      System.out.println("  Updating " + str2.s1 + ": " + pat);
    }

    // Get info about RLI we just added
    System.out.println("Testing RLIInfo function");
    rliinfo = lrc.rliInfo("rls://bogushost.edu");
    System.out.println("  " + rliinfo.url + " updateint " +
		       rliinfo.updateinterval + " flags " + rliinfo.flags);
    System.out.println("    lastupdate " + rliinfo.lastupdate);
    lrc.rliDelete("rls://bogushost.edu", null);

    System.out.println("Testing RLS stats function");
    RLSStats s = rls.Stats();
    System.out.println("  Version: " + s.Version);
    System.out.println("  Uptime: " + s.Uptime);
    System.out.println("  BloomFilter Update: " + s.LRCBloomFilterUI);
    System.out.println("  LFNList Update: " + s.LRCLFNListUI);
    if ((s.Flags & s.RLS_LRCSERVER) != 0)
      System.out.println("  LRC NumLFN: " + s.LRCNumLFN);
    else
      System.out.println("  RLI NumLFN: " + s.RLINumLFN);

    // Delete LRC mappings for lfn we created earlier.
    System.out.println("Testing LRC delete operation, removing java/lfn1");
    lrc.delete("java/lfn1", "java/pfn1");
    lrc.delete("java/lfn1", "java/pfn2");

    rls.Close();
  }
}
