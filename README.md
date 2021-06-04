<p align="center">
  <img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/rebl0x3r/proxy-check">
  <img alt="Tool version" src="https://img.shields.io/badge/version-0.1-brightgreen">
  <img alt="Errors" src="https://img.shields.io/badge/errors fixed-0-red">
  <img alt="GitHub issues" src="https://img.shields.io/github/issues/rebl0x3r/proxy-check">
  <img alt="Open Source" src="https://badges.frapsoft.com/os/v1/open-source.png?v=103">
  <img alt="PHP" src="https://img.shields.io/badge/php-5.3%20--%207.4-blue">
  <img alt="License" src="https://user-images.githubusercontent.com/63623649/120860225-966d4d80-c585-11eb-8d8a-7dca56f6eac8.png">
  <a href="https://t.me/f4c3r100"><img alt="Ask Me" src="https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg"></a>
  <a href="https://t.me/scarlettamarket/"><img src="https://raw.githubusercontent.com/Patrolavia/telegram-badge/master/chat.svg" alt="Support chat"></a>
</p>

<h1 align=center>Proxy Check</h1>

<hr>

<h2>Table Of Contents</h2>

* [General Information](#general-info)
* [Preview](#preview)
* [Installation](#installation)
* [Configuration](#configuration)
* [Disclaimer](#disclaimer)
* [Credits](#credits)
* [Social Media](#social-media)
* [Bug Report](#bug-report)

<hr>

<h2>General Information</h2>
  
  This tool is used to identify proxy IPs aswell as VPN.
  
<hr>

<h2>Preview</h2>
<p align="center">
  <img alt="Showcase" src="https://i.ibb.co/5sp60TR/image.png">
</p>

<h2>Installation</h2>

  Proxy-Check tool requires <a href="https://www.php.net/">PHP </a> v7+ to run.
  
  <h3>Linux</h3>
  
  ```
  $ git clone https://github.com/rebl0x3r/proxy-check
  
  $ cd proxy-check

  $ chmod +x proxy-check.php
  
  $ php proxy-check.php <IP>
  
  $ php proxy-check.php 185.220.102.247
  
  +===== INFO =====+
  IP          : 185.220.102.247
  Provider    : Zwiebelfreunde e.V.
  Country     : Germany
  Is Proxy    : yes
  Type        : TOR
  Risk Score  : 100
  +===== [ @f4c3r100 ] =====+

```
    
<h3>Windows</h3>

  For windows, we need python aswell you can download it from here:<br>
  
  * [PHP Windows Installation Guide](https://www.php.net/manual/en/install.windows.php)
  
<h3>Linux</h3>

  For Linux, you should have PHP pre-installed, if not run following:
  
  ```
  $ sudo apt update
  
  $ sudo apt upgrade -y
  
  $ sudo apt install php$(php -v | head -1 | cut -d . -f1-2 | sed 's/PHP //g') -y
  
  $ sudo apt install php-curl php$(php -v | head -1 | cut -d . -f1-2 | sed 's/PHP //g')-curl -y
  
  ```

<h2>Configuration</h2>
  
  For the configuration you see between line ```19``` and line ```30``` an array.
  
  The values of this array depends on the result.
  ```
  "vpn"	=> "1",
	"asn"	=> "1",
	"node"	=> "1",
	"time"	=> "0",
	"risk"	=> "2",
	"port"	=> "0",
	"seen"	=> "1",
	"days" 	=> "7",
	"tag"	=> "0",
	"ver"	=> "0"
  ```
  
  <code>0</code> means disabled.
  <code>1</code> means enabled.
  
  Actually, there are two variables in the array which have more than 1:
  * <code>risk</code>
  * <code>days</code>

  Risk is the score of the page. While```1``` delivers just the risk score, ```2``` delivers some extra information like:
  * Attack History
    * Vulnerability Probing
    * Forum Spam
    * Login Attempt
    * Registration Attempt
 
 Days will specify the amount of days between now and the days before what with the proxy / ip happened.

  <h3>Getting API Key</h3>
  
  To get an API key register on the page :
  
  [proxycheck.io](https://proxycheck.io/)
  
  If you don't have endless mails, look down below to our channel, we post soon a tutorial how to make infinite Accounts.

<h2>Disclaimer</h2>

  Use this tool for educational purposes only .🕵️‍♂️
  If you do any illegal attacks, i am not responsible for your tasks.
  Use this tool correctly, and do not re-upload it on your github repository without permissions.
  
<hr>
  
<h2>Credits</h2>
  
  Channels On Telegram With Nice Stuff
  
  | Channel | Link |
  | ------ | ------ |
  | LeakerHounds | [https://t.me/LeakerHounds](https://t.me/LeakerHounds) | 
  | ViperZCrew | [https://t.me/ViperZCrew](https://t.me/ViperZCrew) |
  | DeepWaterLeaks | [https://t.me/deepwaterleaks2](https://t.me/deepwaterleaks2) |
  | Tutorials Zone | [https://t.me/tutorials_zone](https://t.me/tutorials_zone) |
  

<hr>
            
<h2>Social Media</h2>
 <img align="left" alt="telegram.org" width="22px" src="https://images.vexels.com/media/users/3/137414/isolated/preview/3f7486417ddd88060a1818d44b6f3728-telegram-icon-logo-by-vexels.png" /> Telegram:<br />
 
* [@f4c3r100](https://t.me/f4c3r100)
* [@On1c0n3](https://t.me/On1c0n3)


<img align="left" alt="github.com" width="22px" src="https://image.flaticon.com/icons/svg/25/25231.svg" /> Github:<br />
 
* Rebl0x3r - [https://github.com/rebl0x3r](https://github.com/rebl0x3r)
* 0n1cOn3 - [https://github.com/0n1cOn3](https://github.com/0n1cOn3)

<hr>

<h2>Bug Report</h2>

  If you found any bug or issue, please go [here](https://github.com/rebl0x3r/proxy-check/issues)
  
  You can also request an update.
  
<hr>



[Site Up](#proxy-check)
