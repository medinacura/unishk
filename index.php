<?php
     include 'php/func.php';
     if(isset($_COOKIE["lg"]))$perd=$_COOKIE["lg"]; // Kontrollojme nqs ndonje perdorues eshte i loguar
	 else $perd=-1;
	 
	 if(isset($_GET['login']))$kat="Login";
	 else $kat="Miresevini";
	 
	 shfaq_koken_e_faqes($kat,"");
?>
<div class="content" id="kerko_id" >
	<div id="divqendror" > 
	<div id="filtersearchdiv">
	         <div id="divheaderlabel">
	          Filtro kerkimin
	          </div>
	          <div id="filteritemdiv">
	               <div id="divheaderlabelgray">
	                Dega
	               </div>
	               <select id="combobox">
                    <option value="informatike" selected="selected">Informatike</option>
                   <option value="matematike">Matematike</option>
                   <option value="fizike">Fizike</option>
                   <option value="letersi">Letersi</option>
                   </select>
	           </div>
	           <div id="filteritemdiv">
	                <div id="divheaderlabelgray">
	                Gjinia
	               </div>
	              <select id="combobox">
                 <option value="mashkull" selected="selected">Mashkull</option>
                  <option value="femer">Femer</option>
                 </select>
	          </div>
	         <div id="filteritemdiv">
	              <div id="divheaderlabelgray">
	              Qyteti
	 			 </div>
				   <select id="combobox">
                 <option value="shkoder" selected="selected">Shkoder</option>
                  <option value="lezhe">Lezhe</option>
				  <option value="tirane">Tirane</option>
				  <option value="durres">Durres</option>
				  <option value="etj">etj...</option>
                 </select>
	  		</div>
	  		 <div id="filteritemdiv">
	   			<div id="divheaderlabelgray">
	  			 Mosha
	  			</div>
				 <select id="combobox">
                 <option value="18" selected="18">18</option>
                  <option value="19">19</option>
				  <option value="20">20</option>
				  <option value="21">21</option>
				  <option value="22">22</option>
				  <option value="23">23</option>
				  <option value="24">24</option>
				  <option value="25">25</option>
				  <option value="26">27</option>
				  
                 </select>
	  		</div>
	  		<div id="filteritemdiv">
	  			 <div id="divheaderlabelgray">
	   				Viti 
	  			</div>
				<select id="combobox">
                 <option value="1" selected="1">1 (I pare)</option>
                  <option value="2">2 (I dyte)</option>
				  <option value="3">3 (I trete)</option>
				  </select>
	  		</div>
	  </div>
       <div class="searchdiv" >
           <form action="funksioni search" method="post">
               <input type="text" name="search" id="search" placeholder="Kerko student ...">
               <input type="button" name="searchbtn" id="searchbtn" value="Kerko">
           </form>
       </div>
	   
	 
	   
	   
	   </div>
    </div><!--fundi i DIV content -->
    
<div class='content' style="display: none;" id="login_id">
<div class='logindivcontainer'><div class='logindiv'><form action='login.php' method='post'>
<input type='text' name='emri' id='username' placeholder='Emri i perdoruesit '></br><input type='password' name='pas' id='password' placeholder='Fjalkalimi'><br>
<input type='button' name='forgotpassbtn' id='forgotpassbtn' value='Keni harruar fjalkalimin?'>
<input type='submit' name='loginbtn' id='loginbtn' value='Hyr'>
</form>
</div>
</div>
</div>
<?php shfaq_footer("<script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>"); ?>