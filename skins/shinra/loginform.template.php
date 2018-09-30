<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/loginform.php begin -->
						<div id="accordion" class="accordion">
<?php	// The height of the Basic form must be smaller than the height of the Advanced form, ?>
<?php	// for this to be possible, set "autoHeight:false" in /skins/shinra/js/jquery-ui-1.8.13.custom.min.js ?>

							<h6><a href="#"><?php echo __("Basic FTP login"); ?></a></h6>
							<div>
								<form id="LoginForm1" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
									<fieldset>
<?php /* ----- FTP server ----- */ ?>
										<div>
											<label><?php echo __("FTP server"); ?></label>
<?php											if ($ftpserver["inputType"] == "text") { ?>

												<!-- <input type="text" name="ftpserver" value="<?php //echo $ftpserver["list"][1]; ?>" class="form-poshytip" title="<?php //echo __("Example"); ?>: ftp.server.com, 192.123.45.67" />-->
												<input type="hidden" name="ftpserver" value="127.0.0.1" class="form-poshytip" title="<?php echo __("Example"); ?>: ftp.server.com, 192.123.45.67" />


<?php											} elseif ($ftpserver["inputType"] == "select") { ?>
												<select name="ftpserver">
<?php												for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
													<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php												} // end for ?>
												</select>
<?php											} elseif ($ftpserver["inputType"] == "hidden") { ?>
												<input type="hidden" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
												<b><?php echo $ftpserver["list"][1]; ?></b>
<?php											} ?>
<?php /* ----- FTP server port ----- */ ?>
<?php								if ($ftpserverport["inputType"] == "text") { ?>
										<input type="hidden" name="ftpserverport" value="21"  />

									<!-- <input type="text" name="ftpserverport" value="<?php echo $ftpserverport["defaultvalue_ftp"]; ?>" style="position: absolute; left: 370px; width: 45px;" maxlength="5" class="form-poshytip" title="<?php echo __("Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"); ?>" /> -->

<?php								} else { ?>
									<input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["defaultvalue_ftp"]; ?>" />
<?php								} ?>

										</div>
<?php /* ----- Username ----- */ ?>
										<div>
											<label><?php echo __("Username"); ?></label>
											<input type="text" name="username" value="<?php echo $username; ?>" class="form-poshytip" title="<?php echo __("Enter your username"); ?>" />
										</div>

<?php /* ----- Password ----- */ ?>
										<div>
											<label><?php echo __("Password"); ?></label>
											<input type="password" name="password" value="<?php echo $password; ?>" class="form-poshytip" title="<?php echo __("Enter your password"); ?>" />
										</div>
<?php /* ----- Login button ----- */ ?>
										<input type="submit" id="LoginButton1" name="Login" value="<?php echo __("Login"); ?>" alt="<?php echo __("Login"); ?>" />
									</fieldset>
									<input type="hidden" name="protocol"  value="FTP" />
									<input type="hidden" name="state"     value="browse" />
									<input type="hidden" name="state2"    value="main" />
								</form>
							</div>


						</div>

<script type="text/javascript"><!--
	document.forms['LoginForm1'].<?php echo $focus; ?>.focus();
//--></script>
