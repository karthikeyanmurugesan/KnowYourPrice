<html>
<head>
<?php
//Language Help
// create a new cURL resource
//
//	$yql_query = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20html%20where%20url%3D'http%3A%2F%2Fwww.agmarknet.nic.in%2Frep1Newx1_today.asp'%20&format=json";
$yql_query = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20html%20where%20url%3D'http%3A%2F%2Fwww.agmarknet.nic.in%2Frep1Newx1_today.asp'%20and%20xpath%3D'%2F%2Ftd'&format=json";
	$session = curl_init($yql_query);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

    $json = curl_exec($session);
    curl_close($session);

	/*
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL,  "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20html%20where%20url%3D'http%3A%2F%2Fwww.agmarknet.nic.in%2Frep1Newx1_today.asp'%20&format=json"  );
//curl_setopt($ch, CURLOPT_HEADER, 0);

// do the curl call to fetch data
  $response = curl_exec($ch); 

  // end the cURL call (this also cleans up memory so it is 
  // important)
  curl_close($ch);
*/
  //$output = json_decode($json);
  // display the output


?>
<script>

function displayDate(div1)
{

var myJSONObject=<?php echo $json; ?>;

console.log(myJSONObject);

if(div1 == 'first'){
		var arr = myJSONObject.query.results.td;
		first = '<select id="firstList" onChange="displayDate(\'second\')">';
		first += '<option value="default">Select one option</option>';
		for(var i=0;i<arr.length;i++){
			if(arr[i].font == null){
				continue;
			}
			if(arr[i].font.font == null){
				continue;
			}
			if(arr[i].font.font.strong == null){
				continue;
			}
			if(arr[i].font.font.strong.strong == null){
				continue;
			}
			first += "<option value=\"" + arr[i].font.font.strong.strong + "\">" + arr[i].font.font.strong.strong + "</option>"			
		}
		first += "</select>";
		document.getElementById("first").innerHTML = first;
	}
	else if(div1 =='second'){
		var arr = myJSONObject.query.results.td;
		var obj = document.getElementById("firstList");
		objvalue = obj.options[obj.selectedIndex].value;
		if(objvalue == 'default'){
			return;
		}
		second = '<select id="secondList" onChange="displayDate(\'third\')">';
		second += '<option value="default">Select one option</option>';
		for(var i=0;i<arr.length;i++){
			if(arr[i].font == null){
				continue;
			}
			if(arr[i].font.font == null){
				continue;
			}
			if(arr[i].font.font.strong == null){
				continue;
			}
			if(arr[i].font.font.strong.strong == null){
				continue;
			}
			if(arr[i].font.font.strong.strong == objvalue){
				for(var j=i+1;j<arr.length;j++){
					if(arr[j].font == null){
						continue;
					}
					if(arr[j].font.font == null){
						continue;
					}
					if(arr[j].font.font == null){
						continue;
					}
					if(arr[j].font.font.strong == null){
						continue;
					}
					if(arr[j].font.font.strong.strong != null){
						second += "</select>";
						document.getElementById("second").innerHTML = second;
						break;
					}
					second += "<option value=\"" + arr[j].font.font.strong + "\">" + arr[j].font.font.strong + "</option>";
					j++;
				}
				break;
			}			
		}
	}
	else if(div1 =='third'){
		var arr = myJSONObject.query.results.td;
		var obj = document.getElementById("firstList");
		objvalue = obj.options[obj.selectedIndex].value;
		var obj2 = document.getElementById("secondList");
		objvalue2 = obj2.options[obj2.selectedIndex].value;
		if(objvalue2 == 'default'){
			return;
		}
		third = '<select id="thirdList" onChange="displayDate(\'fourth\')">';
		third += '<option value="default">Select one option</option>';
		for(var i=0;i<arr.length;i++){
			if(arr[i].font == null){
				continue;
			}
			if(arr[i].font.font == null){
				continue;
			}
			if(arr[i].font.font.strong == null){
				continue;
			}
			if(arr[i].font.font.strong.strong == null){
				continue;
			}
			if(arr[i].font.font.strong.strong == objvalue){
				for(var j=i+1;j<arr.length;j++){
					if(arr[j].font == null){
						continue;
					}
					if(arr[j].font.font == null){
						continue;
					}
					if(arr[j].font.font.strong == null){
						continue;
					}
					if(arr[j].font.font.strong.strong != null){
						break;
					}
					if(arr[j].font.font.strong == objvalue2){								
						for(var k=j+2;k<arr.length;k++){
							if(arr[k].font == null){
								continue;
							}
							if(arr[k].font.font == null){
								continue;
							}
							if(arr[k].font.font.strong != null){
								third += "</select>";
								document.getElementById("third").innerHTML = third;
								break;
							}					
							if(arr[k].font.font.content == null){
								continue;
							}
							third += "<option value=\"" + arr[k].font.font.content + "\">" + arr[k].font.font.content + "</option>";
						}
						break;
					}					
				}
				break;
			}			
		}
	}
	else if(div1 =='fourth'){
		var arr = myJSONObject.query.results.td;
		var obj = document.getElementById("firstList");
		objvalue = obj.options[obj.selectedIndex].value;
		var obj2 = document.getElementById("secondList");
		objvalue2 = obj2.options[obj2.selectedIndex].value;
		var obj3 = document.getElementById("thirdList");
		objvalue3 = obj3.options[obj3.selectedIndex].value;
		for(var i=0;i<arr.length;i++){
			if(arr[i].font == null){
				continue;
			}
			if(arr[i].font.font == null){
				continue;
			}
			if(arr[i].font.font.strong == null){
				continue;
			}
			if(arr[i].font.font.strong.strong == null){
				continue;
			}
			if(arr[i].font.font.strong.strong == objvalue){
				for(var j=i+1;j<arr.length;j++){
					if(arr[j].font == null){
						continue;
					}
					if(arr[j].font.font == null){
						continue;
					}
					if(arr[j].font.font.strong == null){
						continue;
					}
					if(arr[j].font.font.strong.strong != null){
						break;
					}
					if(arr[j].font.font.strong == objvalue2){								
						for(var k=j+2;k<arr.length;k++){
							if(arr[k].font == null){
								continue;
							}
							if(arr[k].font.font == null){
								continue;
							}
							if(arr[k].font.font.strong != null){
								third += "</select>";
								document.getElementById("third").innerHTML = third;
								break;
							}					
							if(arr[k].font.font.content == null){
								continue;
							}
							if(arr[k].font.font.content == objvalue3){
								alert('Price range: Rs.' + (arr[k+2].a.font.content/100).toFixed(2)+'- Rs.'+(arr[k+1].a.font.content/100).toFixed(2));
								//alert('Min: Rs.' + arr[k+2].a.font.content/100);
								break;
							}							
						}
						break;
					}					
				}
				break;
			}			
		}	
	}
}

</script>
</head>
<body onLoad="displayDate('first')">


</br>
</br>
<center><img src="mainimage.jpg" alt="Logo"  width="304" height="128" />

<h5>Know Your Price</h5>
<h6>India</h6>
</P >
<div id="first">
</div>
</P >
<div id="second">
</div>
</P >
<div id="third">
</div>

</body>
</html> 