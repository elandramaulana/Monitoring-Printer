		<style type="text/css">
				#gb{
					position:fixed;
					bottom:5px;
					z-index: 10000;
					right: 0px;
				}
				* html #gb{position:relative;}
			
				.gbtab{
					height:46px;
					width:164px;
					cursor:pointer;
					bottom:0px;
					background:url('live-chat.png') no-repeat;
					position: relative;
					left: 326px;
				}
				.gbcontent{
					float:left;
					width:490px;
					border:1px solid #FFFFFF;
					background:#FFFFFF;
					padding:1px;
					height: 560px;
				}
		</style>
		<script type="text/javascript">
			function showHideGB(){
				var gb = document.getElementById("gb");
				var w = gb.offsetHeight;
				gb.opened ? moveGB(0, 47-w) : moveGB(20-w, 0);
				gb.opened = !gb.opened;
			}
			function moveGB(x0, xf){
				var gb = document.getElementById("gb");
				var dx = Math.abs(x0-xf) > 10 ? 5 : 1;
				var dir = xf>x0 ? 1 : -1;
				var x = x0 + dx * dir;
				gb.style.bottom = x.toString() + "px";
				if(x0!=xf){setTimeout("moveGB("+x+", "+xf+")", 10);}
			}
		</script>
		<div id="gb" class="hidden-xs">
			<div class="gbtab" onClick="showHideGB()"></div>
			<div class="gbcontent">
				<div style="text-align:center;">
					<iframe src="https://rtccontact.com/chat_semen/client.php" width="100%" height="100%" frameborder="1" scrolling="yes"></iframe>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			var gb = document.getElementById("gb");
			gb.style.bottom = (46-gb.offsetHeight).toString() + "px";
		</script>

