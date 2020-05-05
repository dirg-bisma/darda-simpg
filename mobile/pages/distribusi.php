	<?php 
		  include '../curl.php';
	?>
				<style type="text/css">
					a{
						color: #333;
					}
					a:focus{
						text-decoration: none;
					}
					.list-group-item {
					    border: 1px solid rgba(0,0,0,.125);
					}
				</style>
				<div class="tab2">
				  <button class="tablinks2 active" onclick="openDashboard(event, 'belum');list_spta(0);">Belum Distribusi</button>
				  <button class="tablinks2" onclick="openDashboard(event, 'sudah');list_spta(1);">Sudah Distribusi</button>
				</div>
				<!-- Tab content -->
				<div id="belum" class="tabcontent2 active" style="display: block;padding-top: 45px;padding-bottom: 68px;">
					<ul id="listspta" class="list-group">				
					</ul>
				</div>
				<div id="sudah" class="tabcontent2" style="padding-top: 45px;padding-bottom: 68px;">
					<ul id="listspta2" class="list-group">				
					</ul>
				</div>
				<script type="text/javascript">
					list_spta(0);
					list_spta(1);
					function openDashboard(evt, cityName) {
					  // Declare all variables
					  var i, tabcontent2, tablinks2;

					  // Get all elements with class="tabcontent2" and hide them
					  tabcontent2 = document.getElementsByClassName("tabcontent2");
					  for (i = 0; i < tabcontent2.length; i++) {
					    tabcontent2[i].style.display = "none";
					  }

					  // Get all elements with class="tablinks2" and remove the class "active"
					  tablinks2 = document.getElementsByClassName("tablinks2");
					  for (i = 0; i < tablinks2.length; i++) {
					    tablinks2[i].className = tablinks2[i].className.replace(" active", "");
					  }

					  // Show the current tab, and add an "active" class to the button that opened the tab
					  document.getElementById(cityName).style.display = "block";
					  evt.currentTarget.className += " active";
					}

					function list_spta(sts) {
					 	$.ajax({
			                url : 'http://<?php echo $_SERVER['HTTP_HOST']; ?>/simpg/index.php/apidistribusispta/listSPTA?username=<?php echo $id; ?>&tgl=<?php echo $date; ?>&status='+sts,
			                type: 'POST',
			                dataType: 'json',
			                success: function(data)
			                {	
			                	if (sts == 0) {
				                	$("#listspta").html("");
				                	for (var i = 0; i < data.data.length; i++) {
		       				                	$("#listspta").append('<a href="open:http://<?php echo $_SERVER['HTTP_HOST']; ?>/mobile/pages/distribusidetail.php?des='+data.data[i].deskripsi_blok+'&kod='+data.data[i].kode_kat_lahan+'&spta='+data.data[i].no_spat+'#Input-Distribusi"><li class="list-group-item"><div style="font-weight: bold;">'+data.data[i].deskripsi_blok+'</div><div style="font-size: 13px;color: red;">'+data.data[i].no_spat+'</div><div style="font-size: 13px;">'+data.data[i].kode_kat_lahan+'</div>	</li></a>');	
				                	}
				                }else{
				                	$("#listspta2").html("");
				                	for (var i = 0; i < data.data.length; i++) {
		       				                	$("#listspta2").append('<li class="list-group-item"><div style="font-weight: bold;">'+data.data[i].deskripsi_blok+'</div><div style="font-size: 13px;color: red;">'+data.data[i].no_spat+'</div><div style="font-size: 13px;">'+data.data[i].kode_kat_lahan+'</div>	</li>');	
				                	}
				                }
			                },
			                error: function (jqXHR, textStatus, errorThrown)
			                {
			                }
			                });
					 }
				</script>
			
