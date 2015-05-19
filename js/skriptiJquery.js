
$(document).ready(function () {
 
    // Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
	
}

var pageID = getUrlVars()["pageid"];
if (pageID != null ){
	 $("#"+pageID).css('background-color','#1b9bff');
	
	}
	
	var emerstudenti="student";
	$('#butonprofili').html(emerstudenti +"<img id='atagfoto'src='img/def_profile_pic.jpg' alt='foto profili' >");


	
});