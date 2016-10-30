<?php namespace ctubio\ItsToolTime;

class DNSBL {
  public static function getDNSBLs() {
    return self::$dnsbls;
  }

  public static function getCount() {
    return count(self::$dnsbls);
  }

  static protected $dnsbls = array(
    array(
     'name' => '0Spam',
     'zone' => '0spam.fusionzero.com',
     'page' => 'http://0spam.fusionzero.com'
    ),array(
     'name' => '0Spam KillList',
     'zone' => '0spam-killlist.fusionzero.com',
     'page' => 'http://0spam.fusionzero.com'
    ),array(
     'name' => 'Frontbridge\'s 88.blocklist.zap',
     'zone' => '88.blocklist.zap',
     'page' => 'http://www.microsoft.com/online/exchange-hosted-services.mspx'
    ),array(
     'name' => 'Redhawk.org',
     'zone' => 'access.redhawk.org ',
     'page' => 'http://www.redhawk.org/'
    ),array(
     'name' => 'kundenserver.de admin.bl',
     'zone' => 'admin.bl.kundenserver.de',
     'page' => 'http://admin.bl.kundenserver.de/'
    ),array(
     'name' => 'RBL.JP Project (ALL)',
     'page' => 'http://www.rbl.jp/allrbl-e.html',
     'zone' => 'all.rbl.jp '
    ),array(
     'name' => 'all.s5h.net',
     'zone' => 'all.s5h.net',
     'page' => 'http://www.usenix.org.uk/wiki/RBL'
    ),array(
     'name' => 'SpamRATS! all',
     'zone' => 'all.spamrats.com',
     'page' => 'http://www.spamrats.com/'
    ),array(
     'name' => 'Spam-RBL.fr',
     'zone' => 'all.spam-rbl.fr',
     'page' => 'http://spam-rbl.fr/'
    ),array(
     'name' => 'IPQuery.org Any',
     'zone' => 'any.dnsl.ipquery.org',
     'page' => 'http://www.ipquery.org/'
    ),array(
     'name' => 'ASPEWS Listings',
     'zone' => 'aspews.ext.sorbs.net',
     'page' => 'http://www.aspews.org/'
    ),array(
     'name' => 'Barracuda Reputation Block List',
     'zone' => 'b.barracudacentral.org',
     'page' => 'http://www.barracudacentral.org/rbl/'
    ),array(
     'name' => 'IPQuery.org Backscat',
     'zone' => 'backscat.dnsl.ipquery.org',
     'page' => 'http://www.ipquery.org/'
    ),array(
     'name' => 'Spam Eating Monkey SEM-BACKSCATTER',
     'zone' => 'backscatter.spameatingmonkey.net',
     'page' => 'http://spameatingmonkey.com/'
    ),array(
     'name' => 'StopSpam.org Badhost',
     'zone' => 'badhost.stopspam.org',
     'page' => 'http://www.stopspam.org/rblcheck/index.php'
    ),array(
     'name' => 'Spam Eating Monkey SEM-BADNETS',
     'zone' => 'badnets.spameatingmonkey.net',
     'page' => 'http://spameatingmonkey.com/'
    ),array(
     'name' => 'Barracuda Reputation Block List (for SpamAssassin)',
     'zone' => 'bb.barracudacentral.org',
     'page' => 'http://www.barracudacentral.org/rbl/'
    ),array(
     'name' => 'BBM',
     'zone' => 'bbm.2ch.net ',
     'page' => 'http://info.2ch.net/wiki/index.php?BBM'
    ),array(
     'name' => 'BBX',
     'zone' => 'bbx.2ch.net ',
     'page' => 'http://info.2ch.net/wiki/index.php?Rock54'
    ),array(
     'name' => 'www.blocklist.de',
     'zone' => 'bl.blocklist.de',
     'page' => 'http://www.blocklist.de/'
    ),array(
     'name' => 'Dr.MX',
     'zone' => 'bl.drmx.org',
     'page' => 'http://www.drmx.org/removal.php'
    ),array(
     'name' => 'emailbasura.org',
     'zone' => 'bl.emailbasura.org',
     'page' => 'http://www.emailbasura.org/cgi-bin/emailbasura-ini.pl?lang=eng'
    ),array(
     'name' => 'Mailspike Blacklist',
     'zone' => 'bl.mailspike.net',
     'page' => 'http://mailspike.org/'
    ),array(
     'name' => 'MAV BL',
     'zone' => 'bl.mav.com.br ',
     'page' => 'http://www.emailcomseguranca.com.br/mav-bl/'
    ),array(
     'name' => 'MIPSpace',
     'zone' => 'bl.mipspace.com',
     'page' => 'http://www.mipspace.com/'
    ),array(
     'name' => 'NoSolicitado.org',
     'zone' => 'bl.nosolicitado.org',
     'page' => 'http://www.nosolicitado.org/'
    ),array(
     'name' => 'nsZones.com SBL+Dyn',
     'zone' => 'bl.nszones.com',
     'page' => 'http://nszones.com/'
    ),array(
     'name' => 'SenderScore',
     'zone' => 'bl.score.senderscore.com',
     'page' => 'http://www.senderscore.org/'
    ),array(
     'name' => 'SHLINK (RBL)',
     'zone' => 'bl.shlink.org ',
     'page' => 'http://shlink.org/'
    ),array(
     'name' => 'SpamCannibal',
     'zone' => 'bl.spamcannibal.org',
     'page' => 'http://www.spamcannibal.org/'
    ),array(
     'name' => 'SpamCop Blocking List',
     'zone' => 'bl.spamcop.net',
     'page' => 'http://spamcop.net/bl.shtml'
    ),array(
     'name' => 'Spam Eating Monkey SEM-BLACK',
     'zone' => 'bl.spameatingmonkey.net',
     'page' => 'http://spameatingmonkey.com/'
    ),array(
     'name' => 'SpamStinks.com DNSBL',
     'zone' => 'bl.spamstinks.com',
     'page' => 'http://spamstinks.com/'
    ),array(
     'name' => 'Technovision Spamsource List',
     'zone' => 'bl.technovision.dk',
     'page' => 'http://bl.technovision.dk/'
    ),array(
     'name' => 'Tiopan Consulting IP Blacklist',
     'zone' => 'bl.tiopan.com',
     'page' => 'http://www.tiopan.com/blacklist.php'
    ),array(
     'name' => 'AT&T Mail BL',
     'zone' => 'blacklist.mail.ops.asp.att.net',
     'page' => 'http://www.att.com/esupport/index.jsp?App_ID=PBY'
    ),array(
     'name' => 'C&CZ\'s own black list',
     'zone' => 'blacklist.sci.kun.nl',
     'page' => 'http://wiki.science.ru.nl/cncz/Email_spam'
    ),array(
     'name' => 'AT&T Sequoia BL',
     'zone' => 'blacklist.sequoia.ops.asp.att.net',
     'page' => 'http://www.att.com/esupport/index.jsp?App_ID=PBY'
    ),array(
     'name' => 'Woody\'s SMTP Blacklist IPv4',
     'zone' => 'blacklist.woody.ch',
     'page' => 'http://blacklist.woody.ch/rblcheck.php3'
    ),array(
     'name' => 'SORBS Hosts demanding never be tested by SORBS',
     'zone' => 'block.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'StopSpam.org Block',
     'zone' => 'block.stopspam.org',
     'page' => 'http://www.stopspam.org/rblcheck/index.php'
    ),array(
     'name' => 'Cymru Bogon List',
     'zone' => 'bogons.cymru.com',
     'page' => 'http://www.team-cymru.org/Services/Bogons/'
    ),array(
     'name' => 'Blog Spam Blocklist (empty.us)',
     'zone' => 'bsb.empty.us',
     'page' => 'http://bsb.empty.us/'
    ),array(
     'name' => 'Blog Spam Blocklist (spamlookup.net)',
     'zone' => 'bsb.spamlookup.net',
     'page' => 'http://bsb.spamlookup.net/'
    ),array(
     'name' => 'Mailprove',
     'zone' => 'c10.rbl.hk',
     'page' => 'http://www.mailprove.com/'
    ),array(
     'name' => 'Composite Blocking List (CBL)',
     'zone' => 'cbl.abuseat.org ',
     'page' => 'http://cbl.abuseat.org/lookup.cgi'
    ),array(
     'name' => 'China Anti-Spam Alliance CBL',
     'zone' => 'cbl.anti-spam.org.cn',
     'page' => 'http://www.anti-spam.org.cn/CID/17'
    ),array(
     'name' => 'China Anti-Spam Alliance CDL-',
     'zone' => 'cblless.anti-spam.org.cn',
     'page' => 'http://www.anti-spam.org.cn/CID/17'
    ),array(
     'name' => 'China Anti-Spam Alliance CDL+',
     'zone' => 'cblplus.anti-spam.org.cn',
     'page' => 'http://www.anti-spam.org.cn/CID/17'
    ),array(
     'name' => 'China Anti-Spam Alliance CDL',
     'zone' => 'cdl.anti-spam.org.cn',
     'page' => 'http://www.anti-spam.org.cn/CID/17'
    ),array(
     'name' => 'McAfee RBL',
     'zone' => 'cidr.bl.mcafee.com',
     'page' => 'https://kc.mcafee.com/corporate/index?page=content&id=KB53783'
    ),array(
     'name' => 'Abuse.ch Combined zone',
     'zone' => 'combined.abuse.ch',
     'page' => 'http://dnsbl.abuse.ch/'
    ),array(
     'name' => 'MSRBL combined',
     'zone' => 'combined.rbl.msrbl.net',
     'page' => 'http://www.msrbl.com/'
    ),array(
     'name' => 'WPBL - Weighted Private Block List',
     'zone' => 'db.wpbl.info',
     'page' => 'http://www.wpbl.info/'
    ),array(
     'name' => 'AntiCaptcha.NET IPv4',
     'zone' => 'dnsbl.anticaptcha.net',
     'page' => 'http://anticaptcha.net/'
    ),array(
     'name' => 'ASPnet DNSBL/URIBL',
     'zone' => 'dnsbl.aspnet.hu',
     'page' => 'http://dnsbl.aspnet.hu/'
    ),array(
     'name' => 'Burnt-Tech DNSBL',
     'zone' => 'dnsbl.burnt-tech.com',
     'page' => 'http://dnsbl.burnt-tech.com/'
    ),array(
     'name' => 'Cyberlogic DNSBL',
     'zone' => 'dnsbl.cyberlogic.net',
     'page' => 'http://www.cyberlogic.net/'
    ),array(
     'name' => 'DroneBL',
     'zone' => 'dnsbl.dronebl.org',
     'page' => 'http://www.dronebl.org/'
    ),array(
     'name' => 'Microsoft Forefront DNSBL',
     'zone' => 'dnsbl.forefront.microsoft.com',
     'page' => 'http://www.microsoft.com/forefront/'
    ),array(
     'name' => 'German inps.de-DNSBL',
     'zone' => 'dnsbl.inps.de',
     'page' => 'http://dnsbl.inps.de/'
    ),array(
     'name' => 'dnsbl.ipocalypse.net',
     'zone' => 'dnsbl.ipocalypse.net',
     'page' => 'http://ipocalypse.net/'
    ),array(
     'name' => 'JustSpam.org',
     'zone' => 'dnsbl.justspam.org ',
     'page' => 'http://www.justspam.org/'
    ),array(
     'name' => 'Kempt.net DNS Black List',
     'zone' => 'dnsbl.kempt.net',
     'page' => 'http://www.kempt.net/dnsbl/'
    ),array(
     'name' => 'Madavi:BL',
     'zone' => 'dnsbl.madavi.de',
     'page' => 'http://www.madavi.de/index.php/Madavi-BL/39/0/'
    ),array(
     'name' => 'dnsbl.mags.net',
     'zone' => 'dnsbl.mags.net ',
     'page' => 'http://www.mags.net/'
    ),array(
     'name' => 'dnsbl.mcu.edu.tw',
     'zone' => 'dnsbl.mcu.edu.tw',
     'page' => 'http://www.mcu.edu.tw/'
    ),array(
     'name' => 'Open DNS Resolver Check',
     'zone' => 'dnsbl.openresolvers.org',
     'page' => 'http://dns.measurement-factory.com/surveys/openresolvers.html'
    ),array(
     'name' => 'proxyBL',
     'zone' => 'dnsbl.proxybl.org',
     'page' => 'http://proxybl.org/'
    ),array(
     'name' => 'Rizon RBL/DNSBL',
     'zone' => 'dnsbl.rizon.net',
     'page' => 'http://dnsbl.rizon.net/'
    ),array(
     'name' => 'dnsbl.rv-soft.info',
     'zone' => 'dnsbl.rv-soft.info',
     'page' => 'http://dnsbl.rv-soft.info/'
    ),array(
     'name' => 'Rymsho\'s DNSBL',
     'zone' => 'dnsbl.rymsho.ru',
     'page' => 'http://spam.rymsho.ru/'
    ),array(
     'name' => 'Solid.net DNSBL',
     'zone' => 'dnsbl.solid.net',
     'page' => 'http://solid.net/solid/info/antispam.html'
    ),array(
     'name' => 'SORBS Aggregate zone',
     'zone' => 'dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'SpamChampuru DNSBL',
     'zone' => 'dnsbl.spam-champuru.livedoor.com',
     'page' => 'http://spam-champuru.livedoor.com/dnsbl/'
    ),array(
     'name' => 'StopSpam.org dnsbl',
     'zone' => 'dnsbl.stopspam.org',
     'page' => 'http://www.stopspam.org/rblcheck/index.php'
    ),array(
     'name' => 'SwiftBL',
     'zone' => 'dnsbl.swiftbl.org ',
     'page' => 'http://swiftbl.org/'
    ),array(
     'name' => 'WebEquipped.com block list',
     'zone' => 'dnsbl.webequipped.com',
     'page' => 'http://webequipped.com/DNSBL/index.aspx'
    ),array(
     'name' => 'ZapBL DNSRBL',
     'zone' => 'dnsbl.zapbl.net',
     'page' => 'http://zapbl.net/policy.php'
    ),array(
     'name' => 'UCEPROTECT Level 0 (Delay Mail Only)',
     'zone' => 'dnsbl-0.uceprotect.net',
     'page' => 'http://www.uceprotect.net/en/index.php'
    ),array(
     'name' => 'UCEPROTECT Level 1 (Single IP)',
     'zone' => 'dnsbl-1.uceprotect.net',
     'page' => 'http://www.uceprotect.net/en/index.php?m=3&s=3'
    ),array(
     'name' => 'UCEPROTECT Level 2 (Network)',
     'zone' => 'dnsbl-2.uceprotect.net',
     'page' => 'http://www.uceprotect.net/en/index.php?m=3&s=4'
    ),array(
     'name' => 'UCEPROTECT Level 3 (ISP)',
     'zone' => 'dnsbl-3.uceprotect.net',
     'page' => 'http://www.uceprotect.net/en/index.php?m=3&s=5'
    ),array(
     'name' => 'DNSBL Chile',
     'zone' => 'dnsblchile.org',
     'page' => 'http://www.dnsblchile.org/'
    ),array(
     'name' => 'Swinog DNSRBL',
     'zone' => 'dnsrbl.swinog.ch',
     'page' => 'http://antispam.imp.ch/06-dnsbl.php?lng=1'
    ),array(
     'name' => 'Abuse.ch FastFlux Tracker',
     'zone' => 'drone.abuse.ch',
     'page' => 'http://dnsbl.abuse.ch/'
    ),array(
     'name' => 'CanTV.net DUL',
     'zone' => 'dul.blackhole.cantv.net',
     'page' => 'http://abuso.cantv.net/bl/dul'
    ),array(
     'name' => 'SORBS Dynamic IP Addresses',
     'zone' => 'dul.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'StopSpam.org Dul',
     'zone' => 'dul.pacifier.net',
     'page' => 'http://www.stopspam.org/rblcheck/index.php'
    ),array(
     'name' => 'Russian Dial-up User List',
     'zone' => 'dul.ru',
     'page' => 'http://dul.ru/dul.en.html'
    ),array(
     'name' => 'tuxad dunk.dnsbl',
     'zone' => 'dunk.dnsbl.tuxad.de',
     'page' => 'http://www.tuxad.de/hartkore.html'
    ),array(
     'name' => 'nsZones.com Dyn',
     'zone' => 'dyn.nszones.com',
     'page' => 'http://nszones.com/'
    ),array(
     'name' => 'SBG-RBL.ORG (dyn)',
     'zone' => 'dyn.sbg-rbl.org',
     'page' => 'http://www.sbg-rbl.org/'
    ),array(
     'name' => 'SHLINK (Dyn)',
     'zone' => 'dyn.shlink.org',
     'page' => 'http://shlink.org/'
    ),array(
     'name' => 'SpamRATS! Dyna',
     'zone' => 'dyna.spamrats.com',
     'page' => 'http://www.spamrats.com/rats-dyna.php'
    ),array(
     'name' => 'rothen.com DynIp',
     'zone' => 'dynip.rothen.com',
     'page' => 'http://antispam.rothen.com/'
    ),array(
     'name' => 'SORBS Netblocks',
     'zone' => 'escalations.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'sectoor TOR blacklist (exit nodes)',
     'zone' => 'exitnodes.tor.dnsbl.sectoor.de',
     'page' => 'http://www.sectoor.de/tor.php'
    ),array(
     'name' => 'SpamLab FEB',
     'zone' => 'feb.spamlab.com',
     'page' => 'http://www.spamlab.com/'
    ),array(
     'name' => 'fnrbl.fast.net',
     'zone' => 'fnrbl.fast.net ',
     'page' => 'http://www.fast.net/'
    ),array(
     'name' => 'University of Warsaw ICM (Forbidden)',
     'zone' => 'forbidden.icm.edu.pl',
     'page' => 'http://sunsite.icm.edu.pl/spam/bh.html'
    ),array(
     'name' => 'V4BL-FREE',
     'zone' => 'free.v4bl.org',
     'page' => 'http://v4bl.org/'
    ),array(
     'name' => 'tuxad hartkore.dnsbl',
     'zone' => 'hartkore.dnsbl.tuxad.de',
     'page' => 'http://www.tuxad.de/hartkore.html'
    ),array(
     'name' => 'Habeas Infringer List',
     'zone' => 'hil.habeas.com ',
     'page' => 'http://www.habeas.com/'
    ),array(
     'name' => 'CanTV.net HOG',
     'zone' => 'hog.blackhole.cantv.net',
     'page' => 'http://abuso.cantv.net/bl/hog'
    ),array(
     'name' => 'SORBS Open HTTP Proxies',
     'zone' => 'http.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'Abuse.ch Web Abuse Tracker',
     'zone' => 'httpbl.abuse.ch ',
     'page' => 'http://dnsbl.abuse.ch/'
    ),array(
     'name' => 'MSRBL images',
     'zone' => 'images.rbl.msrbl.net',
     'page' => 'http://www.msrbl.com/'
    ),array(
     'name' => 'Intercept DNS Blacklist',
     'zone' => 'intercept.datapacket.net',
     'page' => 'http://www.datapacket.net/'
    ),array(
     'name' => 'V4BL-DDNSBL',
     'zone' => 'ip.v4bl.org',
     'page' => 'http://v4bl.org/'
    ),array(
     'name' => 'Mailhosts.org IPBL',
     'zone' => 'ipbl.mailhosts.org',
     'page' => 'http://mailhosts.org/ipbl/'
    ),array(
     'name' => 'Abuse.ch ZeuS Tracker IP',
     'zone' => 'ipbl.zeustracker.abuse.ch',
     'page' => 'https://zeustracker.abuse.ch/'
    ),array(
     'name' => 'Backscatterer.org',
     'zone' => 'ips.backscatterer.org',
     'page' => 'http://www.backscatterer.org/?target=test'
    ),array(
     'name' => 'NiX Spam DNSBL',
     'zone' => 'ix.dnsbl.manitu.net ',
     'page' => 'http://www.dnsbl.manitu.net/?language=en'
    ),array(
     'name' => 'South Korean Network Blocking List',
     'zone' => 'korea.services.net ',
     'page' => 'http://korea.services.net/'
    ),array(
     'name' => 'BBFH Level 1 (@SORBS) ',
     'zone' => 'l1.bbfh.ext.sorbs.net',
     'page' => 'http://www.bbfh.org/'
    ),array(
     'name' => 'APEWS Level 2',
     'zone' => 'l2.apews.org',
     'page' => 'http://www.apews.org/'
    ),array(
     'name' => 'BBFH Level 2 (@SORBS)',
     'zone' => 'l2.bbfh.ext.sorbs.net',
     'page' => 'http://www.bbfh.org/'
    ),array(
     'name' => 'BBFH Level 3 (@SORBS)',
     'zone' => 'l3.bbfh.ext.sorbs.net',
     'page' => 'http://www.bbfh.org/'
    ),array(
     'name' => 'BBFH Level 4 (@SORBS)',
     'zone' => 'l4.bbfh.ext.sorbs.net',
     'page' => 'http://www.bbfh.org/'
    ),array(
     'name' => 'BBFH Level 1',
     'zone' => 'list.bbfh.org ',
     'page' => 'http://www.bbfh.org/'
    ),array(
     'name' => 'Blog Spam Blacklist',
     'zone' => 'list.blogspambl.com ',
     'page' => 'http://blogspambl.com/'
    ),array(
     'name' => 'INTELLIGENT-IP Internet Services RBL',
     'zone' => 'lookup.dnsbl.iip.lu',
     'page' => 'http://www.dnsbl.iip.lu/'
    ),array(
     'name' => 'JIPPG\'s RBL Project (mail-abuse Listings)',
     'zone' => 'mail-abuse.blacklist.jippg.org',
     'page' => 'http://blacklist.jippg.org/'
    ),array(
     'name' => 'SORBS Open other Proxies',
     'zone' => 'misc.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'SURBL multi (Combined SURBL list)',
     'zone' => 'multi.surbl.org',
     'page' => 'http://www.surbl.org/'
    ),array(
     'name' => 'Spam Eating Monkey SEM-NETBLACK',
     'zone' => 'netbl.spameatingmonkey.net',
     'page' => 'http://spameatingmonkey.com/'
    ),array(
     'name' => 'IPQuery.org Netblock',
     'zone' => 'netblock.dnsl.ipquery.org',
     'page' => 'http://www.ipquery.org/'
    ),array(
     'name' => 'Pedantic.org netblock',
     'zone' => 'netblock.pedantic.org',
     'page' => 'http://www.pedantic.org/'
    ),array(
     'name' => 'Spam Grouper Net block list',
     'zone' => 'netblockbl.spamgrouper.com',
     'page' => 'http://www.spamgrouper.com/'
    ),array(
     'name' => 'SORBS Spamhost (last 48 hours)',
     'zone' => 'new.spam.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'BBQ',
     'zone' => 'niku.2ch.net ',
     'page' => 'http://bbq.uso800.net/code.html'
    ),array(
     'name' => 'no-more-funn',
     'zone' => 'no-more-funn.moensted.dk ',
     'page' => 'http://www.moensted.dk/spam/no-more-funn/'
    ),array(
     'name' => 'SpamRATS! NoPtr',
     'zone' => 'noptr.spamrats.com',
     'page' => 'http://www.spamrats.com/rats-noptr.php'
    ),array(
     'name' => 'nospam.ant.pl',
     'zone' => 'nospam.ant.pl',
     'page' => 'http://nospam.ant.pl/'
    ),array(
     'name' => 'SORBS Spamhost (last year)',
     'zone' => 'old.spam.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'TornevallNET DNSBL',
     'zone' => 'opm.tornevall.org',
     'page' => 'http://dnsbl.tornevall.org/'
    ),array(
     'name' => 'ANTISPAM-UFRJ orvedb',
     'zone' => 'orvedb.aupads.org',
     'page' => 'http://www.aupads.org/'
    ),array(
     'name' => 'Spamhaus PBL Policy Block List',
     'zone' => 'pbl.spamhaus.org',
     'page' => 'http://www.spamhaus.org/pbl/'
    ),array(
     'name' => 'MSRBL phishing',
     'zone' => 'phishing.rbl.msrbl.net',
     'page' => 'http://www.msrbl.com/'
    ),array(
     'name' => 'pofon.foobar.hu',
     'zone' => 'pofon.foobar.hu',
     'page' => 'http://foobar.grin.hu/rbl/pofon/'
    ),array(
     'name' => 'SORBS Aggregate zone (problems)',
     'zone' => 'problems.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'SORBS Aggregate zone (proxies)',
     'zone' => 'proxies.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'PSBL (Passive Spam Block List)',
     'zone' => 'psbl.surriel.com ',
     'page' => 'http://psbl.org/'
    ),array(
     'name' => 'Trend Micro QIL',
     'zone' => 'q.mail-abuse.com',
     'page' => 'http://www.trendmicro.com'
    ),array(
     'name' => 'Trend Micro DUL',
     'zone' => 'r.mail-abuse.com',
     'page' => 'http://www.trendmicro.com'
    ),array(
     'name' => 'Abuse.ro IP RBL',
     'zone' => 'rbl.abuse.ro',
     'page' => 'http://www.abuse.ro/'
    ),array(
     'name' => 'ALTARIA Global IP Services',
     'zone' => 'rbl.altaria.com',
     'page' => 'http://altaria.com/'
    ),array(
     'name' => 'BlakJak.net RBL',
     'zone' => 'rbl.blakjak.net',
     'page' => 'http://www.blakjak.net/RBL'
    ),array(
     'name' => 'CHOON.NET RBL',
     'zone' => 'rbl.choon.net ',
     'page' => 'http://choon.net/check-rbl.php'
    ),array(
     'name' => 'DNS-SERVICIOS RBL',
     'zone' => 'rbl.dns-servicios.com',
     'page' => 'http://rbl.dns-servicios.com/rbl.php'
    ),array(
     'name' => 'EFnet RBL',
     'zone' => 'rbl.efnet.org',
     'page' => 'http://efnetrbl.org/remove.php'
    ),array(
     'name' => 'EFnet RBL (Mirror)',
     'zone' => 'rbl.efnetrbl.org',
     'page' => 'http://efnetrbl.org/remove.php'
    ),array(
     'name' => 'Fasthosts RBL',
     'zone' => 'rbl.fasthosts.co.uk',
     'page' => 'http://www.fasthosts.co.uk/knowledge-base/?article_id=961'
    ),array(
     'name' => 'InterServer BL',
     'zone' => 'rbl.interserver.net ',
     'page' => 'http://rbl.interserver.net/'
    ),array(
     'name' => 'MegaRBL.net',
     'zone' => 'rbl.megarbl.net',
     'page' => 'https://www.megarbl.net/check'
    ),array(
     'name' => 'ORBIT Network RBL',
     'zone' => 'rbl.orbitrbl.com ',
     'page' => 'http://www.orbitrbl.com/'
    ),array(
     'name' => 'Polar Communications Admin RBL',
     'zone' => 'rbl.polarcomm.net',
     'page' => 'http://rbl.polarcomm.net/'
    ),array(
     'name' => 'rbl.schulte.org',
     'zone' => 'rbl.schulte.org ',
     'page' => 'http://rbl.schulte.org/'
    ),array(
     'name' => 'SpamLab RBL',
     'zone' => 'rbl.spamlab.com',
     'page' => 'http://www.spamlab.com/'
    ),array(
     'name' => 'SureSupport RBL',
     'zone' => 'rbl.suresupport.com',
     'page' => 'https://www2.suresupport.com/'
    ),array(
     'name' => 'TDC\'s RBL',
     'zone' => 'rbl.tdk.net',
     'page' => 'http://postmaster.tdc.dk/publish.php?dogtag=f5_ms_po_po_rbl'
    ),array(
     'name' => 'rbl.zenon.net',
     'zone' => 'rbl.zenon.net',
     'page' => 'http://noc.zenon.net/rbl/'
    ),array(
     'name' => 'TRIUMF.ca DNSBL',
     'zone' => 'rbl2.triumf.ca',
     'page' => 'http://rbl2.triumf.ca/'
    ),array(
     'name' => 'SORBS Spamhost (last 28 days)',
     'zone' => 'recent.spam.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'IPQuery.org Relay',
     'zone' => 'relay.dnsl.ipquery.org ',
     'page' => 'http://www.ipquery.org/'
    ),array(
     'name' => 'kundenserver.de relays',
     'zone' => 'relays.bl.kundenserver.de',
     'page' => 'http://relaytest.kundenserver.de/'
    ),array(
     'name' => 'SORBS Aggregate zone (relays)',
     'zone' => 'relays.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'nether.net (relays)',
     'zone' => 'relays.nether.net ',
     'page' => 'http://puck.nether.net/or/'
    ),array(
     'name' => 'CanTV.net RHSBL',
     'zone' => 'rhsbl.blackhole.cantv.net',
     'page' => 'http://abuso.cantv.net/bl/rhsbl'
    ),array(
     'name' => 'CanTV.net ROT',
     'zone' => 'rot.blackhole.cantv.net',
     'page' => 'http://abuso.cantv.net/bl/rot'
    ),array(
     'name' => 'ANTISPAM-UFRJ rsbl',
     'zone' => 'rsbl.aupads.org',
     'page' => 'http://www.aupads.org/'
    ),array(
     'name' => 'Proofpoint Dynamic Reputation',
     'zone' => 'safe.dnsbl.prs.proofpoint.com',
     'page' => 'http://www.proofpoint.com/'
    ),array(
     'name' => 'SORBS Aggregate zone (safe)',
     'zone' => 'safe.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'SBG-RBL.ORG (sbg)',
     'zone' => 'sbg.sbg-rbl.org',
     'page' => 'http://www.sbg-rbl.org/'
    ),array(
     'name' => 'nsZones.com SBL',
     'zone' => 'sbl.nszones.com',
     'page' => 'http://nszones.com/'
    ),array(
     'name' => 'Spamhaus SBL Spamhaus Block List',
     'zone' => 'sbl.spamhaus.org',
     'page' => 'http://www.spamhaus.org/sbl/'
    ),array(
     'name' => 'Spamhaus SBL-XBL Combined Block List',
     'zone' => 'sbl-xbl.spamhaus.org',
     'page' => 'http://www.spamhaus.org/'
    ),array(
     'name' => 'kundenserver.de schizo-bl',
     'zone' => 'schizo-bl.kundenserver.de',
     'page' => 'http://schizo-bl.kundenserver.de/'
    ),array(
     'name' => 'RBL.JP Project (Short)',
     'zone' => 'short.rbl.jp ',
     'page' => 'http://www.rbl.jp/allrbl-e.html'
    ),array(
     'name' => 'Mailhosts.org SHORTLIST',
     'zone' => 'shortlist.mailhosts.org',
     'page' => 'http://mailhosts.org/'
    ),array(
     'name' => 'IPQuery.org Single',
     'zone' => 'single.dnsl.ipquery.org',
     'page' => 'http://www.ipquery.org/'
    ),array(
     'name' => 'Spam Grouper IP only list',
     'zone' => 'singlebl.spamgrouper.com',
     'page' => 'http://www.spamgrouper.com/'
    ),array(
     'name' => 'SORBS Open SMTP relays',
     'zone' => 'smtp.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'SORBS Open SOCKS Proxies',
     'zone' => 'socks.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'Abuse.ch Spam Blacklist',
     'zone' => 'spam.abuse.ch',
     'page' => 'http://dnsbl.abuse.ch/'
    ),array(
     'name' => 'CanTV.net SPAM',
     'zone' => 'spam.blackhole.cantv.net',
     'page' => 'http://abuso.cantv.net/bl/spam'
    ),array(
     'name' => 'Anonmails.de DNSBL',
     'zone' => 'spam.dnsbl.anonmails.de',
     'page' => 'http://www.anonmails.de/dnsbl.php'
    ),array(
     'name' => 'SORBS Spamhost (any time)',
     'zone' => 'spam.dnsbl.sorbs.net ',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'Pedantic.org spam',
     'zone' => 'spam.pedantic.org',
     'page' => 'http://www.pedantic.org/'
    ),array(
     'name' => 'MSRBL spam',
     'zone' => 'spam.rbl.msrbl.net',
     'page' => 'http://www.msrbl.com/'
    ),array(
     'name' => 'SpamRATS! Spam',
     'zone' => 'spam.spamrats.com',
     'page' => 'http://www.spamrats.com/rats-spam.php'
    ),array(
     'name' => 'kundenserver.de spamblock',
     'zone' => 'spamblock.kundenserver.de',
     'page' => 'http://spamblock.kundenserver.de/'
    ),array(
     'name' => 'Leadmon.Net\'s SpamGuard Listings (LNSG)',
     'zone' => 'spamguard.leadmon.net',
     'page' => 'http://www.leadmon.net/spamguard/'
    ),array(
     'name' => 'Korean KISA-RBL',
     'zone' => 'spamlist.or.kr',
     'page' => 'https://www.kisarbl.or.kr/'
    ),array(
     'name' => 'ImproWare IP based spamlist',
     'zone' => 'spamrbl.imp.ch',
     'page' => 'http://antispam.imp.ch/04-spamlist.html?lng=1'
    ),array(
     'name' => 'spamsources.fabel.dk',
     'zone' => 'spamsources.fabel.dk',
     'page' => 'http://www.spamsources.fabel.dk/'
    ),array(
     'name' => 'SurGATE Reputation Network  (Blocklist)',
     'zone' => 'srnblack.surgate.net',
     'page' => 'http://www.srntools.com/'
    ),array(
     'name' => 'TechnoVision SpamTrap',
     'zone' => 'st.technovision.dk',
     'page' => 'http://st.technovision.dk/'
    ),array(
     'name' => 'dan.me.uk (all tor nodes)',
     'zone' => 'tor.dan.me.uk',
     'page' => 'https://www.dan.me.uk/dnsbl'
    ),array(
     'name' => 'sectoor TOR blacklist',
     'zone' => 'tor.dnsbl.sectoor.de ',
     'page' => 'http://www.sectoor.de/tor.php'
    ),array(
     'name' => 'EFnet TOR',
     'zone' => 'tor.efnet.org',
     'page' => 'http://efnetrbl.org/remove.php'
    ),array(
     'name' => 'dan.me.uk (only tor exit nodes)',
     'zone' => 'torexit.dan.me.uk',
     'page' => 'https://www.dan.me.uk/dnsbl'
    ),array(
     'name' => 'truncate.gbudb.net',
     'zone' => 'truncate.gbudb.net',
     'page' => 'http://www.gbudb.com/truncate/index.jsp'
    ),array(
     'name' => 'Lashback UBL',
     'zone' => 'ubl.unsubscore.com',
     'page' => 'http://www.lashback.com/blacklist/'
    ),array(
     'name' => 'nether.net (unsure)',
     'zone' => 'unsure.nether.net',
     'page' => 'http://puck.nether.net/or/'
    ),array(
     'name' => 'Cymru Fullbogon IPv4 List',
     'zone' => 'v4.fullbogons.cymru.com',
     'page' => 'http://www.team-cymru.org/Services/Bogons/'
    ),array(
     'name' => 'Virbl',
     'zone' => 'virbl.dnsbl.bit.nl',
     'page' => 'http://virbl.bit.nl/'
    ),array(
     'name' => 'RBL.JP Project (Virus)',
     'zone' => 'virus.rbl.jp',
     'page' => 'http://www.rbl.jp/allrbl-e.html'
    ),array(
     'name' => 'MSRBL virus',
     'zone' => 'virus.rbl.msrbl.net',
     'page' => 'http://www.msrbl.com/'
    ),array(
     'name' => 'DRBL Vote Node (@CARAVAN.RU)',
     'zone' => 'vote.drbl.caravan.ru',
     'page' => 'http://drbl.caravan.ru/'
    ),array(
     'name' => 'DRBL Vote Node (@GREMLIN.RU)',
     'zone' => 'vote.drbl.gremlin.ru ',
     'page' => 'http://gremlin.ru/drbl/en/'
    ),array(
     'name' => 'DRBL Vote Node (@DSBL.RU)',
     'zone' => 'vote.drbldf.dsbl.ru',
     'page' => 'http://drbldf.dsbl.ru/en/'
    ),array(
     'name' => 'SORBS Vulnerable formmailers',
     'zone' => 'web.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    ),array(
     'name' => 'MSRBL web',
     'zone' => 'web.rbl.msrbl.net',
     'page' => 'http://www.msrbl.com/'
    ),array(
     'name' => 'DRBL Work Node (@CARAVAN.RU)',
     'zone' => 'work.drbl.caravan.ru',
     'page' => 'http://drbl.caravan.ru/'
    ),array(
     'name' => 'DRBL Work Node (@GREMLIN.RU)',
     'zone' => 'work.drbl.gremlin.ru',
     'page' => 'http://gremlin.ru/drbl/en/'
    ),array(
     'name' => 'DRBL Work Node (@DSBL.RU)',
     'zone' => 'work.drbldf.dsbl.ru ',
     'page' => 'http://drbldf.dsbl.ru/en/'
    ),array(
     'name' => 'ImproWare IP based wormlist',
     'zone' => 'wormrbl.imp.ch',
     'page' => 'http://antispam.imp.ch/03-wormlist.html?lng=1'
    ),array(
     'name' => 'kundenserver.de worms-bl',
     'zone' => 'worms-bl.kundenserver.de',
     'page' => 'http://worms-bl.kundenserver.de/'
    ),array(
     'name' => 'Spamhaus XBL Exploits Block List',
     'zone' => 'xbl.spamhaus.org',
     'page' => 'http://www.spamhaus.org/xbl/'
    ),array(
     'name' => 'Mailhosts.org XPEWS',
     'zone' => 'xpews.mailhosts.org',
     'page' => 'http://mailhosts.org/'
    ),array(
     'name' => 'SURBL xs (snowshoe and pill domains)',
     'zone' => 'xs.surbl.org',
     'page' => 'http://www.surbl.org/'
    ),array(
     'name' => 'Mailspike Zero-hour Data',
     'zone' => 'z.mailspike.net',
     'page' => 'http://mailspike.org/monitor.html'
    ),array(
     'name' => 'Spamhaus ZEN Combined Block List',
     'zone' => 'zen.spamhaus.org',
     'page' => 'http://www.spamhaus.org/zen/'
    ),array(
     'name' => 'SORBS hijacked networks',
     'zone' => 'zombie.dnsbl.sorbs.net',
     'page' => 'http://www.sorbs.net/'
    )
  );
}