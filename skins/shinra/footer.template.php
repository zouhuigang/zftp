<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/footer.php begin -->
			
			</div>
			<!-- ENDS content -->

		</div>
		<!-- ENDS MAIN -->

		<!-- FOOTER -->
		<div id="footer">

<?php 		if ($net2ftp_globals["state"] == "login" && $net2ftp_settings["net2ftpdotcom"] == "yes") { ?>
			<div style="color: #bbbaba; margin-left: 30px; margin-bottom: 30px;">
				<h6>Disclaimer for interactive services</h6>
				<textarea rows="4" readonly="readonly" style="width: 65%">
					暂无内容
				</textarea>
			</div>
<?php 		} // end if ?>

			<!-- Bottom -->
			<div id="bottom">
				在线FTP管理工具: <a href="https://github.com/zouhuigang/zftp">ZFTP</a>
				<div id="to-top" class="poshytip" title="To top"></div>
					
			</div>
			<!-- ENDS Bottom -->

		</div>
		<!-- ENDS FOOTER -->
		
	</div>
	<!-- ENDS WRAPPER -->

<!-- Template /skins/shinra/footer.php end -->