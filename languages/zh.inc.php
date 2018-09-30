<?php

//   -------------------------------------------------------------------------------
//  |                  net2ftp: a web based FTP client                              |
//  |              Copyright (c) 2003-2017 by David Gartner                         |
//  |                                                                               |
//  | This program is free software; you can redistribute it and/or                 |
//  | modify it under the terms of the GNU General Public License                   |
//  | as published by the Free Software Foundation; either version 2                |
//  | of the License, or (at your option) any later version.                        |
//  |                                                                               |
//   -------------------------------------------------------------------------------

//   -------------------------------------------------------------------------------
//  | For credits, see the credits.txt file                                         |
//   -------------------------------------------------------------------------------
//  |                                                                               |
//  |                              INSTRUCTIONS                                     |
//  |                                                                               |
//  |  The messages to translate are listed below.                                  |
//  |  The structure of each line is like this:                                     |
//  |     $message["Hello world!"] = "Hello world!";                                |
//  |                                                                               |
//  |  Keep the text between square brackets [] as it is.                           |
//  |  Translate the 2nd part, keeping the same punctuation and HTML tags.          |
//  |                                                                               |
//  |  The English message, for example                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is written in PHP!";    |
//  |  should become after translation:                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp est ecrit en PHP!";     |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is geschreven in PHP!"; |
//  |                                                                               |
//  |  Note that the variable starts with a dollar sign $, that the value is        |
//  |  enclosed in double quotes " and that the line ends with a semi-colon ;       |
//  |  Be careful when editing this file, do not erase those special characters.    |
//  |                                                                               |
//  |  Some messages also contain one or more variables which start with a percent  |
//  |  sign, for example %1\$s or %2\$s. The English message, for example           |
//  |     $messages[...] = ["The file %1\$s was copied to %2\$s "]                  |
//  |  should becomes after translation:                                            |
//  |     $messages[...] = ["Le fichier %1\$s a �t� copi� vers %2\$s "]             |
//  |                                                                               |
//  |  When a real percent sign % is needed in the text it is entered as %%         |
//  |  otherwise it is interpreted as a variable. So no, it's not a mistake.        |
//  |                                                                               |
//  |  Between the messages to translate there is additional PHP code, for example: |
//  |      if ($net2ftp_globals["state2"] == "rename") {           // <-- PHP code  |
//  |          $net2ftp_messages["Rename file"] = "Rename file";   // <-- message   |
//  |      }                                                       // <-- PHP code  |
//  |  This code is needed to load the messages only when they are actually needed. |
//  |  There is no need to change or delete any of that PHP code; translate only    |
//  |  the message.                                                                 |
//  |                                                                               |
//  |  Thanks in advance to all the translators!                                    |
//  |  David.                                                                       |
//  |                                                                               |
//   -------------------------------------------------------------------------------


// -------------------------------------------------------------------------
// Language settings
// -------------------------------------------------------------------------

// HTML lang attribute
$net2ftp_messages["en"] = "zh";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "UTF-8";

// -------------------------------------------------------------------------
// Messages
// -------------------------------------------------------------------------

$net2ftp_messages["%1\$s File"] = "%1\$s File";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(注意: 如果你没有域名，此链接可能无法使用.)";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> 无法被重命名为 <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> 被成功重命名为 <b>%2\$s</b>";
$net2ftp_messages["ARC archive"] = "ARC archive";
$net2ftp_messages["ARJ archive"] = "ARJ archive";
$net2ftp_messages["ASP script"] = "ASP script";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["Actions"] = "操作";
$net2ftp_messages["Add another"] = "Add another";
$net2ftp_messages["Admin functions"] = "系统管理功能";
$net2ftp_messages["Adobe Acrobat document"] = "Adobe Acrobat document";
$net2ftp_messages["Advanced"] = "高级";
$net2ftp_messages["Advanced FTP functions"] = "Advanced FTP functions";
$net2ftp_messages["Advanced functions"] = "高级功能";
$net2ftp_messages["Advanced login"] = "Advanced login";
$net2ftp_messages["All"] = "全部";
$net2ftp_messages["All the selected directories and files have been processed."] = "所有选定的目录和文件被处理.";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "所有所选的目录里的子目录和文件的内容也都将被删除!";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";
$net2ftp_messages["An error has occured"] = "发生一个错误";
$net2ftp_messages["Anonymous"] = "匿名";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "文档 <b>%1\$s</b> 没有被处理，因为无法识别它的扩展名. 当前只有 zip, tar, tgz and gz 文档被支持.";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Archives"] = "压缩文件";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "在这里输入的压缩文件将被解压缩, 文档里的文件将被上传到FTP服务器.";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "确定要删除这些目录和文件?";
$net2ftp_messages["Ascending order"] = "升序排列";
$net2ftp_messages["Automatic"] = "Automatic";
$net2ftp_messages["Back"] = "退回";
$net2ftp_messages["Basic FTP login"] = "Basic FTP login";
$net2ftp_messages["Basic SSH login"] = "Basic SSH login";
$net2ftp_messages["Bitmap file"] = "Bitmap file";
$net2ftp_messages["Bookmark"] = "书签";
$net2ftp_messages["Calculate the size of the selected entries"] = "计算所选的内容的大小";
$net2ftp_messages["Cascading Style Sheet"] = "Cascading Style Sheet";
$net2ftp_messages["Case sensitive search"] = "大小写字母有区别";
$net2ftp_messages["Changing the directory"] = "Changing the directory";
$net2ftp_messages["Changing to the directory %1\$s: "] = "正改变目录到 %1\$s: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Check the SSH server's public key fingerprint"] = "Check the SSH server's public key fingerprint";
$net2ftp_messages["Checking files"] = "确认文件中";
$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "查看PHP的FTP模块是否已经安装: ";
$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "查看web服务器上的目录权限: 一个文件将会写入到 /temp 目录然后会被删除.";
$net2ftp_messages["Chmod"] = "修改权限";
$net2ftp_messages["Chmod also the files within this directory"] = "也设置此目录里的文件的权限";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "也设置此目录里的子目录的权限";
$net2ftp_messages["Chmod directories and files"] = "修改目录和文件权限";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "修改所选的权限 (只可用于 Unix/Linux/BSD 服务器)";
$net2ftp_messages["Choose"] = "选择";
$net2ftp_messages["Choose a directory"] = "选择一个目录";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "点击按 %1\$s 分类并升序排列";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "点击按 %1\$s 分类并降序排列";
$net2ftp_messages["Closing the file: "] = "关闭文件: ";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connecting to a test FTP server: ";
$net2ftp_messages["Connecting to the FTP server"] = "正链接到FTP服务器";
$net2ftp_messages["Connecting to the FTP server: "] = "正链接到FTP服务器: ";
$net2ftp_messages["Connection settings:"] = "连接语句:";
$net2ftp_messages["Continue"] = "Continue";
$net2ftp_messages["Copied file %1\$s"] = "Copied file %1\$s";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
$net2ftp_messages["Copy"] = "复制";
$net2ftp_messages["Copy directories and files"] = "复制目录和文件";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "复制目录 <b>%1\$s</b> 到:";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "复制文件 <b>%1\$s</b> 到:";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "复制链接 <b>%1\$s</b> 到:";
$net2ftp_messages["Copy the selected entries"] = "复制所选";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Copying the net2ftp installer script to the FTP server";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Could not connect to SSH server"] = "Could not connect to SSH server";
$net2ftp_messages["Could not copy file %1\$s"] = "Could not copy file %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Could not create directory %1\$s";
$net2ftp_messages["Could not generate a temporary file."] = "无法创建暂时文件.";
$net2ftp_messages["Could not get fingerprint"] = "Could not get fingerprint";
$net2ftp_messages["Could not get public host key"] = "Could not get public host key";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Create a new file in directory %1\$s"] = "在目录 %1\$s 里创建新文件";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Create a website easily using ready-made templates";
$net2ftp_messages["Create new directories"] = "新建目录";
$net2ftp_messages["Create the MySQL database tables"] = "创建MySQL 数据表";
$net2ftp_messages["Created directory %1\$s"] = "Created directory %1\$s";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Creating a temporary directory on the FTP server";
$net2ftp_messages["Creating filename: "] = "创建文件名: ";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "已经达到每日限制: 文件 <b>%1\$s</b> 无法被传送";
$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Daily limit reached: you will not be able to transfer data";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";
$net2ftp_messages["Date from:"] = "日期从:";
$net2ftp_messages["Dear,"] = "Dear,";
$net2ftp_messages["Decompressing archives and transferring files"] = "解压缩文档并传送文件中";
$net2ftp_messages["Default"] = "缺省";
$net2ftp_messages["Delete"] = "删除";
$net2ftp_messages["Delete directories and files"] = "删除目录和文件";
$net2ftp_messages["Delete the selected entries"] = "删除所选";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "删除文件 <b>%1\$s</b>";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "被删除的子目录 <b>%1\$s</b>";
$net2ftp_messages["Deleting the file: "] = "删除文件: ";
$net2ftp_messages["Descending order"] = "降序排列";
$net2ftp_messages["Details"] = "详细资料";
$net2ftp_messages["Different target FTP server:"] = "不同的目标FTP服务器:";
$net2ftp_messages["Directories"] = "目录";
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "目录名含有字符 \' 无法被正常显示. 只能删除它们. 请退回然后选择其它的子目录.";
$net2ftp_messages["Directory"] = "目录";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "目录 <b>%1\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Directory <b>%1\$s</b> could not be created.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "目录 <b>%1\$s</b> 被成功修改权限为 <b>%2\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "目录 <b>%1\$s</b> 被成功创建.";
$net2ftp_messages["Directory Tree"] = "目录树";
$net2ftp_messages["Disabled"] = "Disabled";
$net2ftp_messages["Double-click to go to a subdirectory:"] = "双击打开下级目录:";
$net2ftp_messages["Download"] = "下载";
$net2ftp_messages["Download a zip file containing all selected entries"] = "下载一个zip 文件含有所有选定的内容";
$net2ftp_messages["Download the file %1\$s"] = "下载文件 %1\$s";
$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Drag and drop one of the links below to the bookmarks bar";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "由于技术原因，发送到地址 <b>%1\$s</b> 的邮件无法被邮寄出。";
$net2ftp_messages["Edit"] = "编辑";
$net2ftp_messages["Edit the source code of file %1\$s"] = "编辑文件 %1\$s 的源代码";
$net2ftp_messages["Email the zip file in attachment to:"] = "把zip文件作为邮件附件发送到:";
$net2ftp_messages["Empty logs"] = "为空";
$net2ftp_messages["Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"] = "Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21";
$net2ftp_messages["Enter your password"] = "Enter your password";
$net2ftp_messages["Enter your username"] = "Enter your username";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp.";
$net2ftp_messages["Example"] = "例子";
$net2ftp_messages["Executable"] = "Executable";
$net2ftp_messages["Execute %1\$s in a new window"] = "执行 %1\$s 于新打开的窗口";
$net2ftp_messages["FTP mode"] = "FTP 模式";
$net2ftp_messages["FTP server"] = "FTP 服务器";
$net2ftp_messages["FTP server port"] = "FTP 服务器端口";
$net2ftp_messages["FTP server response:"] = "FTP server response:";
$net2ftp_messages["File"] = "文件";
$net2ftp_messages["File <b>%1\$s</b>"] = "文件 <b>%1\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "文件 <b>%1\$s</b> 无法移动";
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "文件 <b>%1\$s</b> 无法传送到FTP服务器上";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "文件<b>%1\$s</b> 传送到FTP服务器上,使用的FTP模式为 <b>%2\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "文件 <b>%1\$s</b> 是ok的";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded.";
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "文件 <b>%1\$s</b> 太大. 无法上传该文件.";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "文件 <b>%1\$s</b> 被成功修改权限为 <b>%2\$s</b>";
$net2ftp_messages["File: "] = "文件: ";
$net2ftp_messages["Files"] = "文件";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "在这里输入的文件将被传送到FTP服务器.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted.";
$net2ftp_messages["Find files which contain a particular word"] = "搜索含有特定单词的文件";
$net2ftp_messages["Fingerprint"] = "Fingerprint";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["Font file"] = "Font file";
$net2ftp_messages["Forums"] = "Forums";
$net2ftp_messages["GIF file"] = "GIF file";
$net2ftp_messages["GIMP file"] = "GIMP file";
$net2ftp_messages["GZ archive"] = "GZ archive";
$net2ftp_messages["Get fingerprint"] = "Get fingerprint";
$net2ftp_messages["Get the SSH server's public key fingerprint before logging in to verify the server's identity"] = "Get the SSH server's public key fingerprint before logging in to verify the server's identity";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Getting archive %1\$s of %2\$s from the FTP server";
$net2ftp_messages["Getting fingerprint, please wait..."] = "Getting fingerprint, please wait...";
$net2ftp_messages["Getting the FTP server system type: "] = "正获取FTP 服务器系统类型: ";
$net2ftp_messages["Getting the FTP system type"] = "Getting the FTP system type";
$net2ftp_messages["Getting the current directory"] = "Getting the current directory";
$net2ftp_messages["Getting the list of directories and files"] = "正获取目录和文件列表";
$net2ftp_messages["Getting the raw list of directories and files: "] = "正获取原始目录和文件: ";
$net2ftp_messages["Go"] = "前往";
$net2ftp_messages["Go back"] = "退回";
$net2ftp_messages["Go to the advanced functions"] = "前往高级功能";
$net2ftp_messages["Go to the login page"] = "登陆";
$net2ftp_messages["Go to the parent directory"] = "上级目录";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Go to the subdirectory %1\$s";
$net2ftp_messages["Group"] = "组";
$net2ftp_messages["HTML file"] = "HTML file";
$net2ftp_messages["HTML templates"] = "HTML templates";
$net2ftp_messages["Help"] = "帮助";
$net2ftp_messages["Help Guide"] = "Help Guide";
$net2ftp_messages["IP address: "] = "IP address: ";
$net2ftp_messages["Icons"] = "图标";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "如果目标文件已经存在，它将被覆盖";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "If you need unlimited usage, please install net2ftp on your own web server.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "如果确实需要net2ftp 来处理耗时长的任务, 请考虑安装net2ftp 到你自己的服务器上.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "如果你要复制这些文件到其他其他FTP服务器, 请输入你的登入信息.";
$net2ftp_messages["Image"] = "图像";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it.";
$net2ftp_messages["In order to run it, click on the link below."] = "In order to run it, click on the link below.";
$net2ftp_messages["Information about the sender: "] = "Information about the sender: ";
$net2ftp_messages["Initial directory"] = "初始目录";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Install software packages"] = "Install software packages";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Install software packages (requires PHP on web server)";
$net2ftp_messages["JPEG file"] = "JPEG file";
$net2ftp_messages["Java Upload"] = "Java 上传";
$net2ftp_messages["Java source file"] = "Java source file";
$net2ftp_messages["JavaScript file"] = "JavaScript file";
$net2ftp_messages["Language:"] = "语言:";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "如果你要复制到相同的FTP服务器上，请留空.";
$net2ftp_messages["License"] = "协议";
$net2ftp_messages["Line"] = "Line";
$net2ftp_messages["List"] = "浏览";
$net2ftp_messages["List of commands:"] = "List of commands:";
$net2ftp_messages["Logging"] = "登入中";
$net2ftp_messages["Logging into the FTP server"] = "Logging into the FTP server";
$net2ftp_messages["Logging into the FTP server: "] = "正登入到FTP服务器: ";
$net2ftp_messages["Logging out of the FTP server"] = "Logging out of the FTP server";
$net2ftp_messages["Login"] = "登入";
$net2ftp_messages["Login!"] = "Login!";
$net2ftp_messages["Logout"] = "登出";
$net2ftp_messages["MOV movie file"] = "MOV movie file";
$net2ftp_messages["MPEG movie file"] = "MPEG movie file";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Access database";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Excel spreadsheet";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - PowerPoint presentation";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Project file";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Visio drawing";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Word document";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "在目录 %1\$s 里创建子目录";
$net2ftp_messages["Message of the sender: "] = "Message of the sender: ";
$net2ftp_messages["Mobile"] = "Mobile";
$net2ftp_messages["Mod Time"] = "修改时间";
$net2ftp_messages["Move"] = "移到";
$net2ftp_messages["Move directories and files"] = "移动目录和文件";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "移动目录 <b>%1\$s</b> 到:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "移动文件 <b>%1\$s</b> 到:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "移动链接 <b>%1\$s</b> 到:";
$net2ftp_messages["Move the selected entries"] = "移动所选";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "移动文件 <b>%1\$s</b>";
$net2ftp_messages["MySQL database"] = "MySQL 数据库名";
$net2ftp_messages["MySQL password"] = "MySQL 用户密码";
$net2ftp_messages["MySQL password length"] = "MySQL 密码长度";
$net2ftp_messages["MySQL server"] = "MySQL 服务器名";
$net2ftp_messages["MySQL username"] = "MySQL 用户名";
$net2ftp_messages["Name"] = "名称";
$net2ftp_messages["New dir"] = "新目录";
$net2ftp_messages["New directory name:"] = "新目录名称:";
$net2ftp_messages["New file"] = "新文件";
$net2ftp_messages["New file name: "] = "新文件名: ";
$net2ftp_messages["New name: "] = "新名称: ";
$net2ftp_messages["No data"] = "无数据";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Note that if you don't open the Zip file, the files inside cannot harm your computer.";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "注意发送文件不是匿名发送: 你的IP地址和发送日期将会自动加入到邮件里.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "注意：此计算机的其他用户可以单击浏览器的“后退”按钮并访问FTP服务器。";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "注意: 在复制任何内容之前，必须保证目标目录已经存在.";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "注意: 当你使用此书签, 会弹出一个窗口，要求你的用户名和密码.";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. 文件名: %1\$s";
$net2ftp_messages["Old name: "] = "旧名称: ";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "One click access (net2ftp won't ask for a password - less safe)";
$net2ftp_messages["Open"] = "打开";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Calc 6.0 spreadsheet";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Calc 6.0 template";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Draw 6.0 document";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Draw 6.0 template";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Impress 6.0 presentation";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Impress 6.0 template";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Math 6.0 document";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Writer 6.0 document";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Writer 6.0 global document";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Writer 6.0 template";
$net2ftp_messages["Opening the file in write mode: "] = "在写入模式下打开文件: ";
$net2ftp_messages["Owner"] = "拥有者";
$net2ftp_messages["PHP Source"] = "PHP Source";
$net2ftp_messages["PHP script"] = "PHP script";
$net2ftp_messages["PNG file"] = "PNG file";
$net2ftp_messages["Parsing the file"] = "Parsing the file";
$net2ftp_messages["Parsing the list of directories and files"] = "Parsing the list of directories and files";
$net2ftp_messages["Passive mode"] = "Passive 模式";
$net2ftp_messages["Password"] = "密码";
$net2ftp_messages["Password length"] = "密码长度";
$net2ftp_messages["Perms"] = "权限";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "请输入正确的日期 Y-m-d 格式在 \"从\" 输入框.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "请输入正确的日期 Y-m-d 格式在 \"到\" 输入框.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "请输入正确的文件大小在 \"从\" 输入框, 如0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "请输入正确的文件大小在 \"到\" 输入框, 如500000.";
$net2ftp_messages["Please enter a valid filename."] = "请输入正确的文件名称.";
$net2ftp_messages["Please enter a valid search word or phrase."] = "请输入正确的词汇或者词组.";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter your Administrator username and password."] = "Please enter your Administrator username and password.";
$net2ftp_messages["Please enter your MySQL settings:"] = "Please enter your MySQL settings:";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Please enter your username and password for FTP server <b>%1\$s</b>.";
$net2ftp_messages["Please specify a filename"] = "请确认一个文件名";
$net2ftp_messages["Please wait..."] = "请稍候...";
$net2ftp_messages["Powered by"] = "使用";
$net2ftp_messages["Printing the list of directories and files"] = "正打印目录和文件列表";
$net2ftp_messages["Printing the result"] = "Printing the result";
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "正在处理压缩文档 %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "处理目录<b>%1\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Processing entries within directory <b>%1\$s</b>:";
$net2ftp_messages["Processing entry %1\$s"] = "Processing entry %1\$s";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "对目录 <b>%1\$s</b> 的处理已经完成";
$net2ftp_messages["Processing the entries"] = "正处理输入中";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Quicktime movie file"] = "Quicktime movie file";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["Reading the file"] = "Reading the file";
$net2ftp_messages["Real movie file"] = "Real movie file";
$net2ftp_messages["Refresh"] = "刷新";
$net2ftp_messages["Rename"] = "重命名";
$net2ftp_messages["Rename directories and files"] = "重命名目录和文件";
$net2ftp_messages["Rename the selected entries"] = "重命名所选";
$net2ftp_messages["Requested files"] = "被请求的文件";
$net2ftp_messages["Restrict the search to:"] = "限制查询范围为:";
$net2ftp_messages["Restrictions:"] = "限制:";
$net2ftp_messages["Results:"] = "结果:";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Right-click on one of the links below and choose \"Add to Favorites...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Right-click on one of the links below and choose \"Bookmark This Link...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Right-click on one of the links below and choose \"Bookmark link...\"";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Right-click on one the links below and choose \"Add Link to Bookmarks...\"";
$net2ftp_messages["SSH fingerprint"] = "SSH fingerprint";
$net2ftp_messages["SSH server"] = "SSH server";
$net2ftp_messages["Save"] = "保存";
$net2ftp_messages["Save the zip file on the FTP server as:"] = "保存zip文件到FTP服务器中为:";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";
$net2ftp_messages["Script finished in %1\$s seconds"] = "代码执行耗时 %1\$s 秒";
$net2ftp_messages["Script halted"] = "代码终止";
$net2ftp_messages["Search"] = "搜索";
$net2ftp_messages["Search directories and files"] = "搜索目录和文件";
$net2ftp_messages["Search for a word or phrase"] = "查找词汇或者词组";
$net2ftp_messages["Search results"] = "搜索结果为";
$net2ftp_messages["Searching the files..."] = "正搜索文件...";
$net2ftp_messages["Select the directory %1\$s"] = "Select the directory %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "Select the file %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Select the symlink %1\$s";
$net2ftp_messages["Send arbitrary FTP commands"] = "Send arbitrary FTP commands";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Send arbitrary FTP commands to the FTP server";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Sending FTP command %1\$s of %2\$s";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Sent via the net2ftp application installed on this website: ";
$net2ftp_messages["Set all permissions"] = "设置所有权限";
$net2ftp_messages["Set all targetdirectories"] = "设置所有的目标目录";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "设置目录 <b>%1\$s</b> 的权限为: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "设置文件 <b>%1\$s</b> 的权限为: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "设置链接 <b>%1\$s</b> 的权限为: ";
$net2ftp_messages["Setting the passive mode"] = "Setting the passive mode";
$net2ftp_messages["Setting the passive mode: "] = "设置passive 模式: ";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Setting the permissions of the temporary directory";
$net2ftp_messages["Settings used:"] = "使用以下设置:";
$net2ftp_messages["Setup MySQL tables"] = "安装 MySQL 数据表";
$net2ftp_messages["Shell script"] = "Shell script";
$net2ftp_messages["Shockwave file"] = "Shockwave file";
$net2ftp_messages["Shockwave flash file"] = "Shockwave flash file";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Should this link not be correct, enter the URL manually in your web browser.";
$net2ftp_messages["Size"] = "大小";
$net2ftp_messages["Size of selected directories and files"] = "所选的目录和文件容量大小";
$net2ftp_messages["Skin:"] = "皮肤:";
$net2ftp_messages["Some additional comments to add in the email:"] = "添加到电子邮件里的一些说明:";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Someone has requested the files in attachment to be sent to this email account (%1\$s).";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - StarCalc 5.x spreadsheet";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - StarChart 5.x document";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - StarDraw 5.x document";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - StarImpress 5.x presentation";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - StarImpress Packed 5.x file";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - StarMail 5.x mail file";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - StarMath 5.x document";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - StarWriter 5.x document";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - StarWriter 5.x global document";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "状态: <b>此文件无法被保存</b>";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "状态: 保存在 <b>%1\$s</b> 使用模式 %2\$s";
$net2ftp_messages["Status: This file has not yet been saved"] = "状态: 此文件未保存";
$net2ftp_messages["Submit"] = "提交";
$net2ftp_messages["Symlink"] = "Symlink";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "链接 <b>%1\$s</b>";
$net2ftp_messages["Symlinks"] = "链接";
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["TAR archive"] = "TAR archive";
$net2ftp_messages["TIF file"] = "TIF file";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "表格 net2ftp_log_consumption_ftpserver 含有重复内容.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "表格 net2ftp_log_consumption_ftpserver 含有重复列.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "表格 net2ftp_log_consumption_ftpserver 无法被更新.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "表格 net2ftp_log_consumption_ipaddress 含有重复内容.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Table net2ftp_log_consumption_ipaddress 含有重复列.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "表格 net2ftp_log_consumption_ipaddress 无法被更新.";
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Table net2ftp_log_status contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Table net2ftp_log_status could not be updated.";
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Table net2ftp_users contains duplicate rows.";
$net2ftp_messages["Target directory:"] = "目标目录:";
$net2ftp_messages["Target name:"] = "目标名称:";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Testing the FTP functions"] = "Testing the FTP functions";
$net2ftp_messages["Text file"] = "Text file";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />";
$net2ftp_messages["The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />"] = "The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP服务器 <b>%1\$s</b> 在被禁的FTP服务器中.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP服务器 <b>%1\$s</b> 不在被允许的FTP 服务器列表中.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "FTP 服务端口 %1\$s 可能无法被使用.";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "根据文件扩展名，将自动选择FTP模式 (ASCII 或者 BINARY) ";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "The SQL query nr <b>%1\$s</b> could not be executed.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "The SQL query nr <b>%1\$s</b> was executed successfully.";
$net2ftp_messages["The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />"] = "The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "输入的权限值 <b>%1\$s</b> 超出可用的范围 000-777. 请重试.";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "The directory <b>%1\$s</b> could not be selected, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "你输入的邮件地址 (%1\$s) 格式不正确.<br />请输入类似以下格式的邮件地址 <b>username@domain.com</b>";
$net2ftp_messages["The file %1\$s could not be opened."] = "The file %1\$s could not be opened.";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The file <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "The file <b>%1\$s</b> is too big to be copied, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "The file <b>%1\$s</b> is too big to be moved, aborting the move";
$net2ftp_messages["The file is too big to be transferred"] = "The file is too big to be transferred";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "The handle of file %1\$s could not be closed.";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "The handle of file %1\$s could not be opened.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server.";
$net2ftp_messages["The log tables could not be copied."] = "The log tables could not be copied.";
$net2ftp_messages["The log tables could not be renamed."] = "The log tables could not be renamed.";
$net2ftp_messages["The log tables were copied successfully."] = "The log tables were copied successfully.";
$net2ftp_messages["The log tables were renamed successfully."] = "The log tables were renamed successfully.";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "最长的执行时间为 <b>%1\$s 秒</b>";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "文件的最大容量受net2ftp 限制为 <b>%1\$s</b> 和受PHP限制为 <b>%2\$s</b>";
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "The net2ftp installer script has been copied to the FTP server.";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "新目录将创建在 <b>%1\$s</b>.";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "新名称不能含有点号. 无法被重命名为 <b>%1\$s</b>";
$net2ftp_messages["The number of files which were skipped is:"] = "The number of files which were skipped is:";
$net2ftp_messages["The oldest log table could not be dropped."] = "The oldest log table could not be dropped.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "The oldest log table was dropped successfully.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "数据表 <b>%1\$s</b> 无法被清空.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "数据表 <b>%1\$s</b> 无法被优化.";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "数据表 <b>%1\$s</b> 被成功清空.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "数据表 <b>%1\$s</b> 优化成功.";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "目标目录 <b>%1\$s</b> 和源目录<b>%2\$s</b>相同或者是源目录<b>%2\$s</b>的子目录 , 所以此目录被跳过";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "目标文件 <b>%1\$s</b> 和源文件相同, 所以此文件被跳过";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped.";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "所选的目录和文件所占的容量大小:";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "函数 <b>consumption_ipaddress_datatransfer</b> 不是数值型.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "词汇 <b>%1\$s</b> 出现在以下文件中:";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "词汇<b>%1\$s</b> 没有在所选的目录和文件中找到.";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "zip文件已经保存到FTP服务器，为 <b>%1\$s</b>";
$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "zip文件已经发送到 <b>%1\$s</b>.";
$net2ftp_messages["This SQL query is going to be executed:"] = "以下SQL语句将要被执行:";
$net2ftp_messages["This file is not accessible from the web"] = "This file is not accessible from the web";
$net2ftp_messages["This folder is empty"] = "此目录为空";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "This function has been disabled by the Administrator of this website.";
$net2ftp_messages["This function is available on PHP 5 only"] = "This function is available on PHP 5 only";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "This script runs on your web server and requires PHP to be installed.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "This time limit guarantees the fair use of the web server for everyone.";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "This version of net2ftp is up-to-date.";
$net2ftp_messages["Time of sending: "] = "Time of sending: ";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "要防止这种情况，您必须关闭所有浏览器窗口。";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "保存图像, 右键点击它, 选择 '保存图像为...'";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "设置一个一般的目录, 在上面的输入框中输入目标目录的名称，然后点击按钮 \"设置所有的目标目录\".";
$net2ftp_messages["To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\""] = "To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\"";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "设置所有的权限为相同值, 在上面中输入需要的权限，然后点击按钮 \"设置所有权限\"";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["Transferring files to the FTP server"] = "正传送文件到FTP服务器上";
$net2ftp_messages["Transform selected entries: "] = "传送所选的: ";
$net2ftp_messages["Transform selected entry: "] = "Transform selected entry: ";
$net2ftp_messages["Troubleshoot an FTP server"] = "FTP服务器上的错误诊断";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "此web服务器上的net2ftp 错误诊断";
$net2ftp_messages["Troubleshoot your net2ftp installation"] = "诊断你的net2ftp 安装";
$net2ftp_messages["Troubleshooting functions"] = "错误诊断功能";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files.";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "Two click access (net2ftp will ask for a password - safer)";
$net2ftp_messages["Type"] = "类型";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "无法关闭对暂时文件的处理";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "无法链接到 FTP 服务器 <b>%1\$s</b> 在端口 <b>%2\$s</b>.<br /><br />确定此FTP服务器地址没有错? 和 HTTP (web) 服务器不同. 请联系你的ISP 服务商或者系统管理员获取帮助.<br />";
$net2ftp_messages["Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to connect to the server <b>%1\$s</b>."] = "Unable to connect to the server <b>%1\$s</b>.";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "无法复制文件 <b>%1\$s</b>";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "无法复制本地文件到远端文件 <b>%1\$s</b> ，使用FTP模式 <b>%2\$s</b>";
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "无法复制远端文件 <b>%1\$s</b> 到当前文件，使用FTP模式 <b>%2\$s</b>";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "无法创建目录 <b>%1\$s</b>";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "无法创建子目录 <b>%1\$s</b>. 可能它已经存在. 继续 复制/移动 的处理...";
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "无法创建暂时文件. 查看目录 %1\$s 的权限设置.";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "无法删除文件 <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "无法删除目录 <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "无法删除文件 <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "无法删除本地文件";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "无法删除子目录 <b>%1\$s</b> - 它可能不为空";
$net2ftp_messages["Unable to delete the temporary directory"] = "Unable to delete the temporary directory";
$net2ftp_messages["Unable to delete the temporary file"] = "无法删除暂时文件";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Unable to delete the temporary file %1\$s";
$net2ftp_messages["Unable to determine your IP address."] = "无法确认你的	IP地址.";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "无法执行命令 <b>%1\$s</b>";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "无法执行站点命令 <b>%1\$s</b>. 注意CHMOD 命令只适用于 Unix FTP 服务器, 而不是Windows FTP 服务器.";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Unable to execute the SQL query <b>%1\$s</b>.";
$net2ftp_messages["Unable to execute the SQL query."] = "Unable to execute the SQL query.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Unable to extract the files and directories from the archive";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Unable to get the archive <b>%1\$s</b> from the FTP server";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "无法从FTP服务器上获取文件 <b>%1\$s</b> , 并保存为暂时文件 <b>%2\$s</b>.<br />查看目录 %3\$s 的权限设置.<br />";
$net2ftp_messages["Unable to get the list of packages"] = "Unable to get the list of packages";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "无法登入到你的FTP 服务器 <b>%1\$s</b> ，使用用户名 <b>%2\$s</b>.<br /><br />你的用户名和密码正确否? 请联系你的ISP 服务商或者系统管理员获取帮助.<br />";
$net2ftp_messages["Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Unable to move the file <b>%1\$s</b>, aborting the move";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "无法移动要上传的文件到temp目录.<br /><br />系统管理员必须将net2ftp的 /temp目录的权限设置为<b> 777</b> .";
$net2ftp_messages["Unable to open the system log."] = "Unable to open the system log.";
$net2ftp_messages["Unable to open the template file"] = "无法打开暂存文件";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "无法打开暂时文件. 查看目录 %1\$s 的权限设置.";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "无法放置文件 <b>%1\$s</b> 到FTP 服务器上.<br />你也许对该目录没有写入的权限.";
$net2ftp_messages["Unable to read the template file"] = "无法读取暂存文件";
$net2ftp_messages["Unable to read the temporary file"] = "无法读取暂时文件";
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "无法重命名目录和文件 <b>%1\$s</b> 为 <b>%2\$s</b>";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Unable to select the database <b>%1\$s</b>.";
$net2ftp_messages["Unable to send the file to the browser"] = "无法发送文件到浏览器";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "无法在FTP服务器上转到passive 模式 <b>%1\$s</b>.";
$net2ftp_messages["Unable to write a message to the system log."] = "Unable to write a message to the system log.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "无法写入语句到暂时文件 <b>%1\$s</b>.<br />查看目录 %2\$s 的权限设置.";
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Unexpected state string: %1\$s. Exiting.";
$net2ftp_messages["Unrecognized FTP output"] = "无法识别FTP输出";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Unzip archives"] = "Unzip archives";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip the selected archives on the FTP server";
$net2ftp_messages["Up"] = "向上";
$net2ftp_messages["Update"] = "更新";
$net2ftp_messages["Upload"] = "上传文件";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "上传文件 %1\$s 的新版本";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
$net2ftp_messages["Upload files and archives"] = "上传文件和压缩文档";
$net2ftp_messages["Upload more files and archives"] = "上传更多的文件和压缩文档";
$net2ftp_messages["Upload new files in directory %1\$s"] = "上传新文件到目录 %1\$s";
$net2ftp_messages["Upload to directory:"] = "上传到目录:";
$net2ftp_messages["Username"] = "用户名";
$net2ftp_messages["Version information"] = "版本信息";
$net2ftp_messages["View"] = "查看";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "查看Macromedia ShockWave Flash 影片 %1\$s";
$net2ftp_messages["View file %1\$s"] = "查看文件 %1\$s";
$net2ftp_messages["View image %1\$s"] = "查看图像 %1\$s";
$net2ftp_messages["View logs"] = "查看登陆信息";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "从你的WEB服务器上查看文件 %1\$s ";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "查看有语法高亮显示的文件 %1\$s";
$net2ftp_messages["WAV sound file"] = "WAV sound file";
$net2ftp_messages["Webmaster's email: "] = "Webmaster's email: ";
$net2ftp_messages["Writing some text to the file: "] = "给此文件写入些文字: ";
$net2ftp_messages["Wrong username or password. Please try again."] = "Wrong username or password. Please try again.";
$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "没有为zip文件命名. 退回并命名.";
$net2ftp_messages["You did not enter your Administrator username or password."] = "You did not enter your Administrator username or password.";
$net2ftp_messages["You did not provide any file to upload."] = "你没有提供要上传的文件.";
$net2ftp_messages["You did not provide any text to send by email!"] = "没有输入要电邮的文字!";
$net2ftp_messages["You did not supply a From address."] = "没有输入寄信人邮件地址.";
$net2ftp_messages["You did not supply a To address."] = "没有输入收信人邮件地址.";
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "您已从FTP服务器注销。要重新登录， <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">请点击此链接</a>。";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "你的IP 地址 (%1\$s) 在被禁的IP地址列表里.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Your root directory <b>%1\$s</b> does not exist or could not be selected.";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your task was stopped"] = "Your task was stopped";
$net2ftp_messages["Zip"] = "Zip";
$net2ftp_messages["Zip archive"] = "Zip archive";
$net2ftp_messages["Zip entries"] = "Zip 输入";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Zip 压缩所选的内容来保存或者电邮";
$net2ftp_messages["en"] = "zh";
$net2ftp_messages["files which were last modified"] = "文件被最新修改";
$net2ftp_messages["files with a filename like"] = "文件名称类似";
$net2ftp_messages["files with a size"] = "文件大小";
$net2ftp_messages["from"] = "从";
$net2ftp_messages["left"] = "left";
$net2ftp_messages["ltr"] = "ltr";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp has tried to determine the directory mapping between the FTP server and the web server.";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com.";
$net2ftp_messages["no - please install it!"] = "否 - 请安装!";
$net2ftp_messages["not OK"] = "not OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "不OK. 查看 %1\$s 目录的权限";
$net2ftp_messages["right"] = "right";
$net2ftp_messages["to"] = "到";
$net2ftp_messages["to:"] = "到:";
$net2ftp_messages["yes"] = "是";

?>