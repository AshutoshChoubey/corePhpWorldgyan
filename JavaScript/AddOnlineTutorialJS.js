
    function Trim(numeric)
 {
	var count=0;
	var count1=0;
	for(var j=0; j<numeric.length; j++)
	{
	  var alphaa = numeric.charAt(j);
	  var hh = alphaa.charCodeAt(0);
	  if(hh == 32)
	  {
	  	count++;
		continue;  
	  }
	  else
	  	break; 
	} 
	for(var j=numeric.length-1; j>=0; j--)
	{
	 
	  var alphaa = numeric.charAt(j);
	  var hh = alphaa.charCodeAt(0);
	  
	  if(hh == 32)
	  {
	  	count1++;
		continue;
	  }
	  else
	  	break; 
	} 
	
	if(count>0 || count1>0)
	{
		count1 = numeric.length - (count1+count);
		return numeric.substr(count,count1);
	}	
	else
		return numeric;
 }

		function getXmlHttpRequestObject() 
		{
			if (window.XMLHttpRequest) 
			{
				return new XMLHttpRequest();
			} 
			else if(window.ActiveXObject) 
			{
				return new ActiveXObject("Microsoft.XMLHTTP");
			} 
			else 
			{
				alert("Could not create XmlHttpRequest Object.  Consider upgrading your browser.");
			}
		}
        function SelectSubcat(val,sel)
        {  
            if(val=="NA")
            {
                return;
            }
            else
            {
                objXMLHttpRequest=getXmlHttpRequestObject();
    			var url = "GetSelect.php";
    			url = url+"?hidValue=" + val;
                url = url+"&type=1";
    			url = url+"&sid="+Math.random();
    			objXMLHttpRequest.open("GET", url, true);
    			objXMLHttpRequest.onreadystatechange = function()
    			{
    				if (objXMLHttpRequest.readyState==4)
            		{
                		var response = objXMLHttpRequest.responseText;
        				var arrayValue=response.split("#");
                        var arrayValue1=arrayValue[1].split("%");
                        var SubCategoryName=document.getElementById('sltSubCategoryNameId');
                        SubCategoryName.options.length = 0;
                        SubCategoryName.options[0] = new Option("< Select Sub Category >", "NA", false, false);
                        var j=1;
        				for(var i=0;i<(arrayValue1.length);++i)
                        {
							var textAndVal=Trim(arrayValue1[i])
                            if(textAndVal!='')
                            {
                                if(sel==textAndVal)
                                {
                                    SubCategoryName.options[j++] = new Option(textAndVal,textAndVal , true, true);
                                }
                                else
                                {
                                    SubCategoryName.options[j++] = new Option(textAndVal,textAndVal , false, false);
                                }
                            }
                        }
                    }
    			} 
    			objXMLHttpRequest.send(null);
            }
        }
        function SelectSubject(val,sel)
        {
            if(val=="NA")
            {
                return;
            }
            else
            {
                objXMLHttpRequest1=getXmlHttpRequestObject();
    			var url = "getSelect.php";
    			url = url+"?hidValue=" + val;
                url = url+"&type=2";
    			url = url+"&sid="+Math.random();
    			objXMLHttpRequest1.open("GET", url, true);
    			objXMLHttpRequest1.onreadystatechange = function()
    			{
    				if (objXMLHttpRequest1.readyState==4)
            		{
                		var response = objXMLHttpRequest1.responseText;
                        var arrayValue=response.split("#");
                        var arrValue=arrayValue[1].split("%")
                        var objSubject=document.getElementById('sltSubjectID');
                        objSubject.options.length = 0;
                        objSubject.options[0] = new Option("< Select Subject >", "NA", false, false);
                        var j=1;
        				for(var i=0;i<(arrValue.length);++i)
                        {
							var textAndVal=Trim(arrValue[i])
                            if(sel==textAndVal)
                            {
                                objSubject.options[j++] = new Option(textAndVal, textAndVal , true, true);
                            }
                            else
                            {
                                objSubject.options[j++] = new Option(textAndVal, textAndVal , false, false);
                            }
                        }
                        document.getElementById("hidSubject").value=numOfSubject;
                    }
    			} 
    			objXMLHttpRequest1.send(null);
            }
        }
        
function addOperation2(tablename)
    {
       //alert("Hiii");
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        
        var row = table.insertRow(rowCount);  
        row.id=rowCount;
        var cellcount=0;
        //Sub Title
        var celltxtTitle = row.insertCell(cellcount);
        var eletxtTitle = document.createElement("input");
        eletxtTitle.type ="text";
        eletxtTitle.id ="txtImgId"+eleID;
        eletxtTitle.name ="txtImg"+eleID;
        alert(eletxtTitle.name);
        eletxtTitle.setAttribute("placeholder","Enter Image title");
        eletxtTitle.setAttribute("className","form-control");
        eletxtTitle.setAttribute("class","form-control");
        celltxtTitle.setAttribute("align", "center");
        celltxtTitle.appendChild(eletxtTitle);
        
        //Description
        cellcount = cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("input");
        eletxtDescription.type ="file";
        eletxtDescription.id ="fileUploadId"+eleID;
        eletxtDescription.name ="fileUpload"+eleID;
        eletxtDescription.setAttribute("placeholder","Upload Image");
        eletxtDescription.setAttribute("className","btn btn-default btn-file");
        eletxtDescription.setAttribute("class","btn btn-default btn-file");
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperation2(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperation2(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperation2(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
        }
        window.document.AddOnlineTutorial.HidAddPlusCountimg.value=eleID;
    }
    
    
    
    function deleteOperation2(val,tablename)
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var eletxtTitle = row.cells[cellcount].childNodes[0];
                eletxtTitle.id ="txtTitleID"+eleID;
                eletxtTitle.name ="txtTitle"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                eletxtDescription.id ="textAreaBodyID"+eleID;
                eletxtDescription.name ="textAreaBody"+eleID;
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperation2(tablename); }
            }
            window.document.AddOnlineTutorial.HidAddPlusCountimg.value=eleID;
        }
        catch(e)
        {
            alert(e.message);
        }
    }
    
    
    function addOperation1(tablename)
    {
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        var row = table.insertRow(rowCount);  
        row.id=rowCount;
        var cellcount=0;
        //Sub Title
        var celltxtTitle = row.insertCell(cellcount);
        var eletxtTitle = document.createElement("input");
        eletxtTitle.type ="text";
        eletxtTitle.id ="txtTitleID"+eleID;
        eletxtTitle.name ="txtTitle"+eleID;
        eletxtTitle.setAttribute("placeholder","Enter Point Subtitle");
        eletxtTitle.setAttribute("className","form-control");
        eletxtTitle.setAttribute("class","form-control");
        celltxtTitle.setAttribute("align", "center");
        celltxtTitle.appendChild(eletxtTitle);
        
        //Description
        cellcount = cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("textarea");
        eletxtDescription.id ="textAreaBodyID"+eleID;
        eletxtDescription.name ="textAreaBody"+eleID;
        eletxtDescription.setAttribute("placeholder","Enter Description");
        eletxtDescription.setAttribute("className","form-control");
        eletxtDescription.setAttribute("class","form-control");
        eletxtDescription.style = "max-width: 500px; max-height: 500px;";
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperation(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperation(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperation1(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
        }
        window.document.AddOnlineTutorial.HidPointCount.value=eleID;
    }
    function deleteOperation(val,tablename)
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var eletxtTitle = row.cells[cellcount].childNodes[0];
                eletxtTitle.id ="txtTitleID"+eleID;
                eletxtTitle.name ="txtTitle"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                eletxtDescription.id ="textAreaBodyID"+eleID;
                eletxtDescription.name ="textAreaBody"+eleID;
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperation1(tablename); }
            }
        }
        catch(e)
        {
            alert(e.message);
        }
    }
    function addOperation21(tablename)
    {
       // alert("Hiii");
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        
        var row = table.insertRow(rowCount);  
        row.id=rowCount;
        var cellcount=0;
        //Sub Title
        var celltxtTitle = row.insertCell(cellcount);
        var eletxtTitle = document.createElement("input");
        eletxtTitle.type ="text";
        eletxtTitle.id ="txtImg2Id"+eleID;
        eletxtTitle.name ="txtImg2"+eleID;
        eletxtTitle.setAttribute("placeholder","Enter Image title");
        eletxtTitle.setAttribute("className","form-control");
        eletxtTitle.setAttribute("class","form-control");
        celltxtTitle.setAttribute("align", "center");
        celltxtTitle.appendChild(eletxtTitle);
        
        //Description
        cellcount = cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("input");
        eletxtDescription.type ="file";
        eletxtDescription.id ="fileUpload2Id"+eleID;
        eletxtDescription.name ="fileUpload2"+eleID;
        eletxtDescription.setAttribute("placeholder","Upload Image");
        eletxtDescription.setAttribute("className","btn btn-default btn-file");
        eletxtDescription.setAttribute("class","btn btn-default btn-file");
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperation21(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperation21(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperation21(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
        }
        //window.document.AddOnlineTutorial.HidAddPlusCount.value=eleID;
    }
    
    
    
    function deleteOperation21(val,tablename)
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var eletxtTitle = row.cells[cellcount].childNodes[0];
                eletxtTitle.id ="txtTitle2ID"+eleID;
                eletxtTitle.name ="txtTitle2"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                eletxtDescription.id ="textAreaBody2ID"+eleID;
                eletxtDescription.name ="textAreaBody2"+eleID;
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperation21(tablename); }
            }
        }
        catch(e)
        {
            alert(e.message);
        }
    }
    
    
    function addOperation22(tablename)
    {
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        var row = table.insertRow(rowCount);  
        row.id=rowCount;
        var cellcount=0;
        //Sub Title
        var celltxtTitle = row.insertCell(cellcount);
        var eletxtTitle = document.createElement("input");
        eletxtTitle.type ="text";
        eletxtTitle.id ="txtTitle2ID"+eleID;
        eletxtTitle.name ="txtTitle2"+eleID;
        eletxtTitle.setAttribute("placeholder","Enter Point Subtitle");
        eletxtTitle.setAttribute("className","form-control");
        eletxtTitle.setAttribute("class","form-control");
        celltxtTitle.setAttribute("align", "center");
        celltxtTitle.appendChild(eletxtTitle);
        
        //Description
        cellcount = cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("textarea");
        eletxtDescription.id ="textAreaBody2ID"+eleID;
        eletxtDescription.name ="textAreaBody2"+eleID;
        eletxtDescription.setAttribute("placeholder","Enter Description");
        eletxtDescription.setAttribute("className","form-control");
        eletxtDescription.setAttribute("class","form-control");
        eletxtDescription.style = "max-width: 500px; max-height: 500px;";
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperation22(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperation22(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperation22(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
        }
        //window.document.AddOnlineTutorial.HidPointCount.value=eleID;
    }
    function deleteOperation22(val,tablename)
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var eletxtTitle = row.cells[cellcount].childNodes[0];
                eletxtTitle.id ="txtTitle2ID"+eleID;
                eletxtTitle.name ="txtTitle2"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                eletxtDescription.id ="textAreaBody2ID"+eleID;
                eletxtDescription.name ="textAreaBody2"+eleID;
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperation22(tablename); }
            }
        }
        catch(e)
        {
            alert(e.message);
        }
    }
    function addOperation31(tablename)
    {
       // alert("Hiii");
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        
        var row = table.insertRow(rowCount);  
        row.id=rowCount;
        var cellcount=0;
        //Sub Title
        var celltxtTitle = row.insertCell(cellcount);
        var eletxtTitle = document.createElement("input");
        eletxtTitle.type ="text";
        eletxtTitle.id ="txtImg3Id"+eleID;
        eletxtTitle.name ="txtImg3"+eleID;
        eletxtTitle.setAttribute("placeholder","Enter Image title");
        eletxtTitle.setAttribute("className","form-control");
        eletxtTitle.setAttribute("class","form-control");
        celltxtTitle.setAttribute("align", "center");
        celltxtTitle.appendChild(eletxtTitle);
        
        //Description
        cellcount = cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("input");
        eletxtDescription.type ="file";
        eletxtDescription.id ="fileUpload3Id"+eleID;
        eletxtDescription.name ="fileUpload3"+eleID;
        eletxtDescription.setAttribute("placeholder","Upload Image");
        eletxtDescription.setAttribute("className","btn btn-default btn-file");
        eletxtDescription.setAttribute("class","btn btn-default btn-file");
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperation31(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperation31(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperation31(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
        }
        //window.document.AddOnlineTutorial.HidAddPlusCount.value=eleID;
    }
    
    
    
    function deleteOperation31(val,tablename)
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var eletxtTitle = row.cells[cellcount].childNodes[0];
                eletxtTitle.id ="txtTitle3ID"+eleID;
                eletxtTitle.name ="txtTitle3"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                eletxtDescription.id ="textAreaBody3ID"+eleID;
                eletxtDescription.name ="textAreaBody3"+eleID;
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperation31(tablename); }
            }
        }
        catch(e)
        {
            alert(e.message);
        }
    }
    
    
    function addOperation32(tablename)
    {
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        var row = table.insertRow(rowCount);  
        row.id=rowCount;
        var cellcount=0;
        //Sub Title
        var celltxtTitle = row.insertCell(cellcount);
        var eletxtTitle = document.createElement("input");
        eletxtTitle.type ="text";
        eletxtTitle.id ="txtTitle3ID"+eleID;
        eletxtTitle.name ="txtTitle3"+eleID;
        eletxtTitle.setAttribute("placeholder","Enter Point Subtitle");
        eletxtTitle.setAttribute("className","form-control");
        eletxtTitle.setAttribute("class","form-control");
        celltxtTitle.setAttribute("align", "center");
        celltxtTitle.appendChild(eletxtTitle);
        
        //Description
        cellcount = cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("textarea");
        eletxtDescription.id ="textAreaBody3ID"+eleID;
        eletxtDescription.name ="textAreaBody3"+eleID;
        eletxtDescription.setAttribute("placeholder","Enter Description");
        eletxtDescription.setAttribute("className","form-control");
        eletxtDescription.setAttribute("class","form-control");
        eletxtDescription.style = "max-width: 500px; max-height: 500px;";
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperation32(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperation32(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperation32(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
        }
        //window.document.AddOnlineTutorial.HidPointCount.value=eleID;
    }
    function deleteOperation32(val,tablename)
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var eletxtTitle = row.cells[cellcount].childNodes[0];
                eletxtTitle.id ="txtTitle2ID"+eleID;
                eletxtTitle.name ="txtTitle2"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                eletxtDescription.id ="textAreaBody2ID"+eleID;
                eletxtDescription.name ="textAreaBody2"+eleID;
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperation32(tablename); }
            }
        }
        catch(e)
        {
            alert(e.message);
        }
    }		
    function addOperation41(tablename)
    {
       // alert("Hiii");
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        
        var row = table.insertRow(rowCount);  
        row.id=rowCount;
        var cellcount=0;
        //Sub Title
        var celltxtTitle = row.insertCell(cellcount);
        var eletxtTitle = document.createElement("input");
        eletxtTitle.type ="text";
        eletxtTitle.id ="txtImg4Id"+eleID;
        eletxtTitle.name ="txtImg4"+eleID;
        eletxtTitle.setAttribute("placeholder","Enter Image title");
        eletxtTitle.setAttribute("className","form-control");
        eletxtTitle.setAttribute("class","form-control");
        celltxtTitle.setAttribute("align", "center");
        celltxtTitle.appendChild(eletxtTitle);
        
        //Description
        cellcount = cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("input");
        eletxtDescription.type ="file";
        eletxtDescription.id ="fileUpload4Id"+eleID;
        eletxtDescription.name ="fileUpload4"+eleID;
        eletxtDescription.setAttribute("placeholder","Upload Image");
        eletxtDescription.setAttribute("className","btn btn-default btn-file");
        eletxtDescription.setAttribute("class","btn btn-default btn-file");
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperation41(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperation41(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperation41(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
        }
        //window.document.AddOnlineTutorial.HidAddPlusCount.value=eleID;
    }
    
    
    
    function deleteOperation41(val,tablename)
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var eletxtTitle = row.cells[cellcount].childNodes[0];
                eletxtTitle.id ="txtTitle3ID"+eleID;
                eletxtTitle.name ="txtTitle3"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                eletxtDescription.id ="textAreaBody3ID"+eleID;
                eletxtDescription.name ="textAreaBody3"+eleID;
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperation41(tablename); }
            }
        }
        catch(e)
        {
            alert(e.message);
        }
    }
    
    
    function addOperation42(tablename)
    {
        var table = document.getElementById(tablename);        
    	var rowCount = table.rows.length;
       // alert("aa="+rowCount);
        if(rowCount>2)
        rowCount = rowCount-1;
        eleID = rowCount;
        var row = table.insertRow(rowCount);  
        row.id=rowCount;
        var cellcount=0;
        //Sub Title
        var celltxtTitle = row.insertCell(cellcount);
        var eletxtTitle = document.createElement("input");
        eletxtTitle.type ="text";
        eletxtTitle.id ="txtTitle4ID"+eleID;
        eletxtTitle.name ="txtTitle4"+eleID;
        eletxtTitle.setAttribute("placeholder","Enter Point Subtitle");
        eletxtTitle.setAttribute("className","form-control");
        eletxtTitle.setAttribute("class","form-control");
        celltxtTitle.setAttribute("align", "center");
        celltxtTitle.appendChild(eletxtTitle);
        
        //Description
        cellcount = cellcount+1;
        var celltxtDescription = row.insertCell(cellcount);
        var eletxtDescription = document.createElement("textarea");
        eletxtDescription.id ="textAreaBody3ID"+eleID;
        eletxtDescription.name ="textAreaBody3"+eleID;
        eletxtDescription.setAttribute("placeholder","Enter Description");
        eletxtDescription.setAttribute("className","form-control");
        eletxtDescription.setAttribute("class","form-control");
        eletxtDescription.style = "max-width: 500px; max-height: 500px;";
        celltxtDescription.setAttribute("align", "center");
        celltxtDescription.appendChild(eletxtDescription);
        
        cellcount=cellcount+1;    
        var cellbtnDelete = row.insertCell(cellcount);
        var elebtnDelete = document.createElement("input");
        elebtnDelete.type ="button";
        elebtnDelete.id = eleID;
        elebtnDelete.setAttribute("class","ListTutorialBtn");
        elebtnDelete.value = "-";
        elebtnDelete.onclick=function(){ deleteOperation42(this.id,tablename); } 
        cellbtnDelete.setAttribute("align", "left");
        cellbtnDelete.appendChild(elebtnDelete);
        
        if(rowCount==2)
        {
            var row = table.rows[1];
            var elebtnDelete = row.cells[2].childNodes[0]; 
            elebtnDelete.setAttribute("id",1);
            elebtnDelete.id=1;
            elebtnDelete.value = "-";      
            elebtnDelete.onclick=function(){ deleteOperation42(this.id,tablename); } 
            var row = table.insertRow(rowCount+1);  
            row.id=rowCount+1;   
                             
            var cellAnswerBlank = row.insertCell(0);
            cellAnswerBlank.colSpan="2";
            cellAnswerBlank.innerHTML="&nbsp;"

            var cellBtnAdd = row.insertCell(1);
            var eleBtnAdd = document.createElement("input");
            eleBtnAdd.type ="button";
            eleBtnAdd.setAttribute("className","ListTutorialBtn");
            eleBtnAdd.setAttribute("class","ListTutorialBtn");
            eleBtnAdd.value = "+";      
            eleBtnAdd.onclick=function(){ addOperation42(tablename); } 
            cellBtnAdd.align="left";
            cellBtnAdd.appendChild(eleBtnAdd);
        }
        //window.document.AddOnlineTutorial.HidPointCount.value=eleID;
    }
    function deleteOperation42(val,tablename)
    {
        try
        {
            var table = document.getElementById(tablename);
            var rowCount = table.rows.length;
            table.deleteRow(val);
            var rowCount = table.rows.length;
            for(var i=1;i<rowCount-1;++i)
            {
                
                var row = table.rows[i];                    
                row.id=i;      
                cellcount=0;
                var eleID=i;
                
                //SubTitle   
                var eletxtTitle = row.cells[cellcount].childNodes[0];
                eletxtTitle.id ="txtTitle2ID"+eleID;
                eletxtTitle.name ="txtTitle2"+eleID;
                
                //Description
                cellcount=cellcount+1;
                var eletxtDescription = row.cells[cellcount].childNodes[0];
                eletxtDescription.id ="textAreaBody2ID"+eleID;
                eletxtDescription.name ="textAreaBody2"+eleID;
                
                cellcount=cellcount+1;        
                var elebtnDelete = row.cells[cellcount].childNodes[0];
                elebtnDelete.setAttribute("id",eleID);
                elebtnDelete.id=eleID;
                elebtnDelete.value = "-";        
            }
            rowCount = table.rows.length;
            if(rowCount==3)
            {
                table.deleteRow(rowCount-1); 
                cellCount=rowCount-2;   
                var row = table.rows[cellCount];
                var eleBtnAdd = row.cells[2].childNodes[0];  
                eleBtnAdd.setAttribute("className","ListTutorialBtn");
                eleBtnAdd.setAttribute("class","ListTutorialBtn");
                eleBtnAdd.value = "+";       
                eleBtnAdd.onclick=function(){ addOperation42(tablename); }
            }
        }
        catch(e)
        {
            alert(e.message);
        }
    }		
     function save()
    {
        var Category=document.getElementById('sltCategoryId').value;
        var objCategory=document.getElementById('sltCategoryId');
        if(Category=='NA')
        {
            
            swal("","Please Select Category");
            objCategory.focus();
            objCategory.select();
            return false;
        }

        var SubCategoryName=document.getElementById('sltSubCategoryNameId').value;
        var objSubCategoryName=document.getElementById('sltSubCategoryNameId');
        if(SubCategoryName=='NA')
        {
            swal("","Please Select Sub Category");
            objSubCategoryName.focus();
            objSubCategoryName.selected();
            return false;
        }
        
        var Subject=document.getElementById('sltSubjectID').value;
        var objSubject=document.getElementById('sltSubjectID');
        if(Subject=='NA')
        {
            swal("","Please Select Subject");
            objSubject.focus();
            objSubject.selected();
            return false;
        }
        var Title=document.getElementById('txtTitle5Id').value;
        var objTitleId=document.getElementById('txtTitle5Id');
        if(Title=='')
        {
            swal("","Please Enter Title");
            objSub.focus();
            objSub.selected();
            return false;
        }
        var Subtitle=document.getElementById('txtDiscID').value;
        var objSubtitle=document.getElementById('txtDiscID');
        if(Subtitle=='')
        {
            swal("","Please Enter Sub Title");
            objSubtitle.focus();
            objSubtitle.selected();
            return false;
        }
        var Discript=document.getElementById('textAreaDicID').value;
        var objDiscript=document.getElementById('textAreaDicID');
        if(Discript=='')
        {
            swal("","Please Enter Discription");
            objSub.focus();
            objSub.selected();
            return false;
        }
        
            window.document.AddOnlineTutorial.hidPost=1; 
            window.document.AddOnlineTutorial.hidCat.value=Category;
            window.document.AddOnlineTutorial.hidSubCat.value=SubCategoryName;
            window.document.AddOnlineTutorial.hidSubject.value=Subject; 
            window.document.AddOnlineTutorial.submit();        
   }