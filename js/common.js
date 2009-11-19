
function truncate(str, limit) 
{
	var bits, i;
	if (STR !== typeof str) {
		return '';
	}
	
	bits = str.split('');
	
	if (bits.length > limit) {
		for (i = bits.length - 1; i > -1; --i) {
			if (i > limit) {
				bits.length = i;
			}
			else if (' ' === bits[i]) {
				bits.length = i;
				break;
			}
		}
		bits.push('...');
	}
	return bits.join('');
}

function setClass(el,classname)
{
	el.className = classname;
}

function MarkNavSection(this_page,parentContainer,markClass,unMarkClass)
{		
	var arr = parentContainer.getElementsByTagName('a');
	var el;
	for(var i=0; i<arr.length; i++)
	{
		el = arr[i];
		var container_id = el.id+'_container';
		var p = document.getElementById(container_id);
		
		var a = el.pathname;
		if(a=='/')
		{
			if(this_page==a)
			{
	   			if(p)
	   			{
	   				setClass(p,markClass);
	   			}
	   			else
	   				setClass(el,markClass);								
			}
			else
			{
	   			if(p)
	   			{
	   				setClass(p,unMarkClass);
	   			}
	   			else
	   				setClass(el,unMarkClass);					
			}
		}
		else
		{
			var page_comp = this_page.substr(0,a.length);
		
			if(a)
			{	
		   		if(a==page_comp)
		   		{
		   			var container_id = el.id+'_container';
	
		   			if(p)
		   			{
		   				setClass(p,markClass);
		   			}
		   			else
		   				setClass(el,markClass);
		   		}
		   		else
				{   			
		   			if(p)
		   			{
		   				setClass(p,unMarkClass);
		   			}
		   			else
		   				setClass(el,unMarkClass);
				}
			}
	   	}
	}
}


function MarkNavLinks(this_page,parentContainer,markClass,unMarkClass)
{
	if(parentContainer)
	{
		var arr = parentContainer.getElementsByTagName('a');
		var el;
		for(var i=0; i<arr.length; i++)
		{
			el = arr[i];	
			var a = el.pathname;
		   	if(a)
		   	{
		   		var container_id = el.id+'_container';
	   			var p = document.getElementById(container_id);
		   		if(('/'+a==this_page) || (a==this_page) || (a+'/'==this_page))
		   		{
		   			if(p)
		   			{
		   				setClass(p,markClass);
		   			}
		   			else
		   				setClass(el,markClass);
		   		}
		   		else
				{   			
		   			if(p)
		   			{
		   				setClass(p,unMarkClass);
		   			}
		   			else
		   				setClass(el,unMarkClass);
				}
		   	}
		}
	}
}

