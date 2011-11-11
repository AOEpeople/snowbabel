<?php

########################################################################
# Extension Manager/Repository config file for ext "snowbabel".
#
# Auto generated 30-08-2011 14:05
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Snowbabel',
	'description' => 'Translation Extension',
	'category' => 'module',
	'author' => 'Daniel Alder',
	'author_email' => 'info@snowflake.ch',
	'shy' => 0,
	'dependencies' => 'static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'module' => 'mod1,mod2',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'snowflake',
	'version' => '3.3.1',
	'constraints' => array(
		'depends' => array(
			'static_info_tables' => ''
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:321:{s:9:"ChangeLog";s:4:"6788";s:10:"README.txt";s:4:"09ec";s:16:"ext_autoload.php";s:4:"af5b";s:12:"ext_icon.gif";s:4:"0d38";s:17:"ext_localconf.php";s:4:"a58f";s:14:"ext_tables.php";s:4:"ca90";s:14:"ext_tables.sql";s:4:"e262";s:25:"icon_tx_sfptools_data.gif";s:4:"475a";s:16:"locallang_db.xlf";s:4:"8647";s:63:"Classes/Application/class.tx_snowbabel_application_settings.php";s:4:"774f";s:66:"Classes/Application/class.tx_snowbabel_application_translation.php";s:4:"c0b0";s:46:"Classes/Columns/class.tx_snowbabel_columns.php";s:4:"840e";s:58:"Classes/Configuration/class.tx_snowbabel_configuration.php";s:4:"ef75";s:57:"Classes/Connection/class.tx_snowbabel_extdirectserver.php";s:4:"23a0";s:36:"Classes/Db/class.tx_snowbabel_db.php";s:4:"203d";s:57:"Classes/Extensions/class.tx_snowbabel_extensions_list.php";s:4:"3323";s:44:"Classes/Labels/class.tx_snowbabel_labels.php";s:4:"d7d0";s:50:"Classes/Languages/class.tx_snowbabel_languages.php";s:4:"596b";s:53:"Classes/System/class.tx_snowbabel_system_indexing.php";s:4:"ed73";s:55:"Classes/System/class.tx_snowbabel_system_statistics.php";s:4:"3d29";s:57:"Classes/System/class.tx_snowbabel_system_translations.php";s:4:"319c";s:38:"Classes/TCA/class.tx_snowbabel_tca.php";s:4:"78e8";s:43:"Resources/Private/Firephp/FirePHP.class.php";s:4:"5f31";s:33:"Resources/Private/Firephp/LICENSE";s:4:"6069";s:32:"Resources/Private/Firephp/fb.php";s:4:"9979";s:45:"Resources/Private/Language/locallang_mod1.xml";s:4:"5931";s:45:"Resources/Private/Language/locallang_mod2.xml";s:4:"4dc5";s:49:"Resources/Private/Language/locallang_settings.xml";s:4:"5105";s:52:"Resources/Private/Language/locallang_translation.xml";s:4:"5c80";s:40:"Resources/Private/Template/settings.html";s:4:"27b2";s:33:"Resources/Public/Css/Settings.css";s:4:"6afe";s:36:"Resources/Public/Css/Translation.css";s:4:"9770";s:36:"Resources/Public/Images/Flags/ad.gif";s:4:"6d1a";s:36:"Resources/Public/Images/Flags/ae.gif";s:4:"f212";s:36:"Resources/Public/Images/Flags/af.gif";s:4:"7110";s:36:"Resources/Public/Images/Flags/ag.gif";s:4:"4906";s:36:"Resources/Public/Images/Flags/ai.gif";s:4:"5ff2";s:36:"Resources/Public/Images/Flags/al.gif";s:4:"02c2";s:36:"Resources/Public/Images/Flags/am.gif";s:4:"33b0";s:36:"Resources/Public/Images/Flags/an.gif";s:4:"caf5";s:36:"Resources/Public/Images/Flags/ao.gif";s:4:"4b96";s:36:"Resources/Public/Images/Flags/ar.gif";s:4:"9c95";s:36:"Resources/Public/Images/Flags/as.gif";s:4:"b58f";s:36:"Resources/Public/Images/Flags/at.gif";s:4:"eeb9";s:36:"Resources/Public/Images/Flags/au.gif";s:4:"1fe8";s:36:"Resources/Public/Images/Flags/aw.gif";s:4:"65ed";s:36:"Resources/Public/Images/Flags/ax.gif";s:4:"6ca1";s:36:"Resources/Public/Images/Flags/az.gif";s:4:"b164";s:36:"Resources/Public/Images/Flags/ba.gif";s:4:"53df";s:36:"Resources/Public/Images/Flags/bb.gif";s:4:"a4e2";s:36:"Resources/Public/Images/Flags/bd.gif";s:4:"12e3";s:36:"Resources/Public/Images/Flags/be.gif";s:4:"595a";s:36:"Resources/Public/Images/Flags/bf.gif";s:4:"207f";s:36:"Resources/Public/Images/Flags/bg.gif";s:4:"5be2";s:36:"Resources/Public/Images/Flags/bh.gif";s:4:"5411";s:36:"Resources/Public/Images/Flags/bi.gif";s:4:"2c7c";s:36:"Resources/Public/Images/Flags/bj.gif";s:4:"da5a";s:36:"Resources/Public/Images/Flags/bm.gif";s:4:"fba7";s:36:"Resources/Public/Images/Flags/bn.gif";s:4:"87b3";s:36:"Resources/Public/Images/Flags/bo.gif";s:4:"0b8e";s:36:"Resources/Public/Images/Flags/br.gif";s:4:"9285";s:36:"Resources/Public/Images/Flags/bs.gif";s:4:"72ba";s:36:"Resources/Public/Images/Flags/bt.gif";s:4:"36d7";s:36:"Resources/Public/Images/Flags/bv.gif";s:4:"bbc9";s:36:"Resources/Public/Images/Flags/bw.gif";s:4:"d841";s:36:"Resources/Public/Images/Flags/by.gif";s:4:"f905";s:36:"Resources/Public/Images/Flags/bz.gif";s:4:"0357";s:36:"Resources/Public/Images/Flags/ca.gif";s:4:"71ad";s:43:"Resources/Public/Images/Flags/catalonia.gif";s:4:"40cb";s:36:"Resources/Public/Images/Flags/cc.gif";s:4:"94a9";s:36:"Resources/Public/Images/Flags/cd.gif";s:4:"7cf2";s:36:"Resources/Public/Images/Flags/cf.gif";s:4:"e885";s:36:"Resources/Public/Images/Flags/cg.gif";s:4:"6ff3";s:36:"Resources/Public/Images/Flags/ch.gif";s:4:"b041";s:36:"Resources/Public/Images/Flags/ci.gif";s:4:"8ed1";s:36:"Resources/Public/Images/Flags/ck.gif";s:4:"af27";s:36:"Resources/Public/Images/Flags/cl.gif";s:4:"78d5";s:36:"Resources/Public/Images/Flags/cm.gif";s:4:"8a1d";s:36:"Resources/Public/Images/Flags/cn.gif";s:4:"b041";s:36:"Resources/Public/Images/Flags/co.gif";s:4:"405d";s:36:"Resources/Public/Images/Flags/cr.gif";s:4:"bd76";s:36:"Resources/Public/Images/Flags/cs.gif";s:4:"be71";s:36:"Resources/Public/Images/Flags/cu.gif";s:4:"03d1";s:36:"Resources/Public/Images/Flags/cv.gif";s:4:"a6bf";s:36:"Resources/Public/Images/Flags/cx.gif";s:4:"ac0b";s:36:"Resources/Public/Images/Flags/cy.gif";s:4:"649f";s:36:"Resources/Public/Images/Flags/cz.gif";s:4:"6352";s:36:"Resources/Public/Images/Flags/de.gif";s:4:"b0db";s:36:"Resources/Public/Images/Flags/dj.gif";s:4:"30bd";s:36:"Resources/Public/Images/Flags/dk.gif";s:4:"d7c2";s:36:"Resources/Public/Images/Flags/dm.gif";s:4:"efcf";s:36:"Resources/Public/Images/Flags/do.gif";s:4:"9389";s:36:"Resources/Public/Images/Flags/dz.gif";s:4:"e8da";s:36:"Resources/Public/Images/Flags/ec.gif";s:4:"4b82";s:36:"Resources/Public/Images/Flags/ee.gif";s:4:"7c9d";s:36:"Resources/Public/Images/Flags/eg.gif";s:4:"99dd";s:36:"Resources/Public/Images/Flags/eh.gif";s:4:"043c";s:36:"Resources/Public/Images/Flags/en.gif";s:4:"b68a";s:41:"Resources/Public/Images/Flags/england.gif";s:4:"331d";s:36:"Resources/Public/Images/Flags/er.gif";s:4:"509e";s:36:"Resources/Public/Images/Flags/es.gif";s:4:"c0dd";s:36:"Resources/Public/Images/Flags/et.gif";s:4:"b738";s:37:"Resources/Public/Images/Flags/fam.gif";s:4:"1901";s:36:"Resources/Public/Images/Flags/fi.gif";s:4:"94e7";s:36:"Resources/Public/Images/Flags/fj.gif";s:4:"3a83";s:36:"Resources/Public/Images/Flags/fk.gif";s:4:"2188";s:36:"Resources/Public/Images/Flags/fm.gif";s:4:"013d";s:36:"Resources/Public/Images/Flags/fo.gif";s:4:"f294";s:36:"Resources/Public/Images/Flags/fr.gif";s:4:"0a46";s:36:"Resources/Public/Images/Flags/ga.gif";s:4:"6023";s:36:"Resources/Public/Images/Flags/gd.gif";s:4:"282a";s:36:"Resources/Public/Images/Flags/ge.gif";s:4:"a041";s:36:"Resources/Public/Images/Flags/gf.gif";s:4:"0a46";s:36:"Resources/Public/Images/Flags/gh.gif";s:4:"e72c";s:36:"Resources/Public/Images/Flags/gi.gif";s:4:"2ca6";s:36:"Resources/Public/Images/Flags/gl.gif";s:4:"edcd";s:36:"Resources/Public/Images/Flags/gm.gif";s:4:"bcfe";s:36:"Resources/Public/Images/Flags/gn.gif";s:4:"9185";s:36:"Resources/Public/Images/Flags/gp.gif";s:4:"15cf";s:36:"Resources/Public/Images/Flags/gq.gif";s:4:"d7be";s:36:"Resources/Public/Images/Flags/gr.gif";s:4:"d266";s:36:"Resources/Public/Images/Flags/gs.gif";s:4:"e3c0";s:36:"Resources/Public/Images/Flags/gt.gif";s:4:"6551";s:36:"Resources/Public/Images/Flags/gu.gif";s:4:"0bde";s:36:"Resources/Public/Images/Flags/gw.gif";s:4:"162a";s:36:"Resources/Public/Images/Flags/gy.gif";s:4:"71a4";s:36:"Resources/Public/Images/Flags/hk.gif";s:4:"692e";s:36:"Resources/Public/Images/Flags/hm.gif";s:4:"1fe8";s:36:"Resources/Public/Images/Flags/hn.gif";s:4:"c0e0";s:36:"Resources/Public/Images/Flags/hr.gif";s:4:"825a";s:36:"Resources/Public/Images/Flags/ht.gif";s:4:"92a6";s:36:"Resources/Public/Images/Flags/hu.gif";s:4:"d543";s:36:"Resources/Public/Images/Flags/id.gif";s:4:"6f27";s:36:"Resources/Public/Images/Flags/ie.gif";s:4:"7492";s:36:"Resources/Public/Images/Flags/il.gif";s:4:"44d2";s:36:"Resources/Public/Images/Flags/in.gif";s:4:"46e1";s:36:"Resources/Public/Images/Flags/io.gif";s:4:"f6c4";s:36:"Resources/Public/Images/Flags/iq.gif";s:4:"a4bd";s:36:"Resources/Public/Images/Flags/ir.gif";s:4:"6456";s:36:"Resources/Public/Images/Flags/is.gif";s:4:"347f";s:36:"Resources/Public/Images/Flags/it.gif";s:4:"7b2f";s:36:"Resources/Public/Images/Flags/jm.gif";s:4:"98ea";s:36:"Resources/Public/Images/Flags/jo.gif";s:4:"ac7a";s:36:"Resources/Public/Images/Flags/jp.gif";s:4:"b6fa";s:36:"Resources/Public/Images/Flags/ke.gif";s:4:"6592";s:36:"Resources/Public/Images/Flags/kg.gif";s:4:"385d";s:36:"Resources/Public/Images/Flags/kh.gif";s:4:"2a00";s:36:"Resources/Public/Images/Flags/ki.gif";s:4:"b018";s:36:"Resources/Public/Images/Flags/km.gif";s:4:"258e";s:36:"Resources/Public/Images/Flags/kn.gif";s:4:"f23f";s:36:"Resources/Public/Images/Flags/kp.gif";s:4:"f45a";s:36:"Resources/Public/Images/Flags/kr.gif";s:4:"53ca";s:36:"Resources/Public/Images/Flags/kw.gif";s:4:"48d8";s:36:"Resources/Public/Images/Flags/ky.gif";s:4:"4d15";s:36:"Resources/Public/Images/Flags/kz.gif";s:4:"9faa";s:36:"Resources/Public/Images/Flags/la.gif";s:4:"334d";s:36:"Resources/Public/Images/Flags/lb.gif";s:4:"2c36";s:36:"Resources/Public/Images/Flags/lc.gif";s:4:"b59f";s:36:"Resources/Public/Images/Flags/li.gif";s:4:"239e";s:36:"Resources/Public/Images/Flags/lk.gif";s:4:"8f90";s:36:"Resources/Public/Images/Flags/lr.gif";s:4:"21cd";s:36:"Resources/Public/Images/Flags/ls.gif";s:4:"68af";s:36:"Resources/Public/Images/Flags/lt.gif";s:4:"017a";s:36:"Resources/Public/Images/Flags/lu.gif";s:4:"2306";s:36:"Resources/Public/Images/Flags/lv.gif";s:4:"2eb6";s:36:"Resources/Public/Images/Flags/ly.gif";s:4:"72a4";s:36:"Resources/Public/Images/Flags/ma.gif";s:4:"ad81";s:36:"Resources/Public/Images/Flags/mc.gif";s:4:"3322";s:36:"Resources/Public/Images/Flags/md.gif";s:4:"7a36";s:36:"Resources/Public/Images/Flags/me.gif";s:4:"887b";s:36:"Resources/Public/Images/Flags/mg.gif";s:4:"8adc";s:36:"Resources/Public/Images/Flags/mh.gif";s:4:"cdfd";s:36:"Resources/Public/Images/Flags/mk.gif";s:4:"b8ea";s:36:"Resources/Public/Images/Flags/ml.gif";s:4:"14ba";s:36:"Resources/Public/Images/Flags/mm.gif";s:4:"f0d6";s:36:"Resources/Public/Images/Flags/mn.gif";s:4:"df21";s:36:"Resources/Public/Images/Flags/mo.gif";s:4:"04bb";s:36:"Resources/Public/Images/Flags/mp.gif";s:4:"cac8";s:36:"Resources/Public/Images/Flags/mq.gif";s:4:"aa80";s:36:"Resources/Public/Images/Flags/mr.gif";s:4:"08c9";s:36:"Resources/Public/Images/Flags/ms.gif";s:4:"d6a0";s:36:"Resources/Public/Images/Flags/mt.gif";s:4:"dc7a";s:36:"Resources/Public/Images/Flags/mu.gif";s:4:"9869";s:36:"Resources/Public/Images/Flags/mv.gif";s:4:"9827";s:36:"Resources/Public/Images/Flags/mw.gif";s:4:"12b2";s:36:"Resources/Public/Images/Flags/mx.gif";s:4:"7211";s:36:"Resources/Public/Images/Flags/my.gif";s:4:"5147";s:36:"Resources/Public/Images/Flags/mz.gif";s:4:"4b93";s:36:"Resources/Public/Images/Flags/na.gif";s:4:"a417";s:36:"Resources/Public/Images/Flags/nc.gif";s:4:"2135";s:36:"Resources/Public/Images/Flags/ne.gif";s:4:"489f";s:36:"Resources/Public/Images/Flags/nf.gif";s:4:"9f85";s:36:"Resources/Public/Images/Flags/ng.gif";s:4:"5ddf";s:36:"Resources/Public/Images/Flags/ni.gif";s:4:"bb82";s:36:"Resources/Public/Images/Flags/nl.gif";s:4:"8299";s:36:"Resources/Public/Images/Flags/no.gif";s:4:"bbc9";s:36:"Resources/Public/Images/Flags/np.gif";s:4:"07dc";s:36:"Resources/Public/Images/Flags/nr.gif";s:4:"2a73";s:36:"Resources/Public/Images/Flags/nu.gif";s:4:"d7ad";s:36:"Resources/Public/Images/Flags/nz.gif";s:4:"5809";s:36:"Resources/Public/Images/Flags/om.gif";s:4:"7204";s:36:"Resources/Public/Images/Flags/pa.gif";s:4:"192c";s:36:"Resources/Public/Images/Flags/pe.gif";s:4:"983a";s:36:"Resources/Public/Images/Flags/pf.gif";s:4:"53c0";s:36:"Resources/Public/Images/Flags/pg.gif";s:4:"c0e2";s:36:"Resources/Public/Images/Flags/ph.gif";s:4:"0630";s:36:"Resources/Public/Images/Flags/pk.gif";s:4:"fe87";s:36:"Resources/Public/Images/Flags/pl.gif";s:4:"279f";s:36:"Resources/Public/Images/Flags/pm.gif";s:4:"c74a";s:36:"Resources/Public/Images/Flags/pn.gif";s:4:"997f";s:36:"Resources/Public/Images/Flags/pr.gif";s:4:"a48b";s:36:"Resources/Public/Images/Flags/ps.gif";s:4:"bf98";s:36:"Resources/Public/Images/Flags/pt.gif";s:4:"b689";s:36:"Resources/Public/Images/Flags/pw.gif";s:4:"a19c";s:36:"Resources/Public/Images/Flags/py.gif";s:4:"bef5";s:36:"Resources/Public/Images/Flags/qa.gif";s:4:"8de7";s:36:"Resources/Public/Images/Flags/re.gif";s:4:"0a46";s:36:"Resources/Public/Images/Flags/ro.gif";s:4:"8569";s:36:"Resources/Public/Images/Flags/rs.gif";s:4:"b193";s:36:"Resources/Public/Images/Flags/ru.gif";s:4:"adda";s:36:"Resources/Public/Images/Flags/rw.gif";s:4:"26c4";s:36:"Resources/Public/Images/Flags/sa.gif";s:4:"94c5";s:36:"Resources/Public/Images/Flags/sb.gif";s:4:"76cf";s:36:"Resources/Public/Images/Flags/sc.gif";s:4:"65c0";s:42:"Resources/Public/Images/Flags/scotland.gif";s:4:"ffd4";s:36:"Resources/Public/Images/Flags/sd.gif";s:4:"9831";s:36:"Resources/Public/Images/Flags/se.gif";s:4:"cf35";s:36:"Resources/Public/Images/Flags/sg.gif";s:4:"2a46";s:36:"Resources/Public/Images/Flags/sh.gif";s:4:"041d";s:36:"Resources/Public/Images/Flags/si.gif";s:4:"b796";s:36:"Resources/Public/Images/Flags/sj.gif";s:4:"bbc9";s:36:"Resources/Public/Images/Flags/sk.gif";s:4:"ffac";s:36:"Resources/Public/Images/Flags/sl.gif";s:4:"dfea";s:36:"Resources/Public/Images/Flags/sm.gif";s:4:"59f4";s:36:"Resources/Public/Images/Flags/sn.gif";s:4:"379c";s:36:"Resources/Public/Images/Flags/so.gif";s:4:"e1d5";s:36:"Resources/Public/Images/Flags/sr.gif";s:4:"4e54";s:36:"Resources/Public/Images/Flags/st.gif";s:4:"6596";s:36:"Resources/Public/Images/Flags/sv.gif";s:4:"e347";s:36:"Resources/Public/Images/Flags/sy.gif";s:4:"d86f";s:36:"Resources/Public/Images/Flags/sz.gif";s:4:"5d7b";s:36:"Resources/Public/Images/Flags/tc.gif";s:4:"0e53";s:36:"Resources/Public/Images/Flags/td.gif";s:4:"2782";s:36:"Resources/Public/Images/Flags/tf.gif";s:4:"9e1a";s:36:"Resources/Public/Images/Flags/tg.gif";s:4:"ece0";s:36:"Resources/Public/Images/Flags/th.gif";s:4:"a4be";s:36:"Resources/Public/Images/Flags/tj.gif";s:4:"9b1b";s:36:"Resources/Public/Images/Flags/tk.gif";s:4:"c895";s:36:"Resources/Public/Images/Flags/tl.gif";s:4:"9e79";s:36:"Resources/Public/Images/Flags/tm.gif";s:4:"8453";s:36:"Resources/Public/Images/Flags/tn.gif";s:4:"3024";s:36:"Resources/Public/Images/Flags/to.gif";s:4:"ecac";s:36:"Resources/Public/Images/Flags/tr.gif";s:4:"3c7e";s:36:"Resources/Public/Images/Flags/tt.gif";s:4:"5715";s:36:"Resources/Public/Images/Flags/tv.gif";s:4:"4a0b";s:36:"Resources/Public/Images/Flags/tw.gif";s:4:"c6da";s:36:"Resources/Public/Images/Flags/tz.gif";s:4:"6af3";s:36:"Resources/Public/Images/Flags/ua.gif";s:4:"acc1";s:36:"Resources/Public/Images/Flags/ug.gif";s:4:"e29a";s:36:"Resources/Public/Images/Flags/um.gif";s:4:"8346";s:41:"Resources/Public/Images/Flags/unknown.gif";s:4:"c3cb";s:36:"Resources/Public/Images/Flags/us.gif";s:4:"4a0c";s:36:"Resources/Public/Images/Flags/uy.gif";s:4:"7478";s:36:"Resources/Public/Images/Flags/uz.gif";s:4:"2eef";s:36:"Resources/Public/Images/Flags/va.gif";s:4:"6f64";s:36:"Resources/Public/Images/Flags/vc.gif";s:4:"cf43";s:36:"Resources/Public/Images/Flags/ve.gif";s:4:"e067";s:36:"Resources/Public/Images/Flags/vg.gif";s:4:"8510";s:36:"Resources/Public/Images/Flags/vi.gif";s:4:"6ab5";s:36:"Resources/Public/Images/Flags/vn.gif";s:4:"6636";s:36:"Resources/Public/Images/Flags/vu.gif";s:4:"2693";s:39:"Resources/Public/Images/Flags/wales.gif";s:4:"7402";s:36:"Resources/Public/Images/Flags/wf.gif";s:4:"321f";s:36:"Resources/Public/Images/Flags/ws.gif";s:4:"32ac";s:36:"Resources/Public/Images/Flags/ye.gif";s:4:"743f";s:36:"Resources/Public/Images/Flags/yt.gif";s:4:"b8c2";s:36:"Resources/Public/Images/Flags/za.gif";s:4:"c8d8";s:36:"Resources/Public/Images/Flags/zm.gif";s:4:"88d7";s:36:"Resources/Public/Images/Flags/zw.gif";s:4:"fd5c";s:50:"Resources/Public/Images/Miscellaneous/ext_icon.gif";s:4:"1bdc";s:46:"Resources/Public/Images/Miscellaneous/menu.gif";s:4:"6454";s:39:"Resources/Public/Images/Silk/accept.png";s:4:"8bfe";s:36:"Resources/Public/Images/Silk/add.png";s:4:"1988";s:43:"Resources/Public/Images/Silk/arrow_down.png";s:4:"60c7";s:43:"Resources/Public/Images/Silk/arrow_left.png";s:4:"5050";s:46:"Resources/Public/Images/Silk/arrow_refresh.png";s:4:"6b95";s:44:"Resources/Public/Images/Silk/arrow_right.png";s:4:"46fa";s:43:"Resources/Public/Images/Silk/arrow_undo.png";s:4:"9a4f";s:41:"Resources/Public/Images/Silk/arrow_up.png";s:4:"34ce";s:45:"Resources/Public/Images/Silk/database_add.png";s:4:"82a7";s:49:"Resources/Public/Images/Silk/database_refresh.png";s:4:"b051";s:39:"Resources/Public/Images/Silk/delete.png";s:4:"6846";s:37:"Resources/Public/Images/Silk/disk.png";s:4:"bb6d";s:43:"Resources/Public/Images/Silk/drive_disk.png";s:4:"d08c";s:38:"Resources/Public/Images/Silk/error.png";s:4:"c847";s:42:"Resources/Public/Images/Silk/page_save.png";s:4:"7ac7";s:55:"Resources/Public/Js/Miscellaneous/snowbabel_generals.js";s:4:"7766";s:45:"Resources/Public/Js/Settings/snowbabel_app.js";s:4:"f9c4";s:57:"Resources/Public/Js/Settings/snowbabel_generalsettings.js";s:4:"ac54";s:51:"Resources/Public/Js/Settings/snowbabel_viewports.js";s:4:"893f";s:48:"Resources/Public/Js/Translation/snowbabel_app.js";s:4:"0907";s:60:"Resources/Public/Js/Translation/snowbabel_columnselection.js";s:4:"a96e";s:58:"Resources/Public/Js/Translation/snowbabel_extensionmenu.js";s:4:"d9d0";s:62:"Resources/Public/Js/Translation/snowbabel_languageselection.js";s:4:"8720";s:53:"Resources/Public/Js/Translation/snowbabel_listview.js";s:4:"95ea";s:54:"Resources/Public/Js/Translation/snowbabel_viewports.js";s:4:"448e";s:38:"Resources/Public/Js/Ux/ItemSelector.js";s:4:"0ec0";s:37:"Resources/Public/Js/Ux/MultiSelect.js";s:4:"4dc4";s:37:"Resources/Public/Js/Ux/SearchField.js";s:4:"94de";s:35:"Resources/Public/Js/Ux/Spotlight.js";s:4:"9c94";s:14:"doc/manual.sxw";s:4:"568e";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"fca9";s:14:"mod1/index.php";s:4:"b442";s:19:"mod1/moduleicon.gif";s:4:"0d38";s:19:"mod1/stylesheet.css";s:4:"d41d";s:14:"mod2/clear.gif";s:4:"cc11";s:13:"mod2/conf.php";s:4:"6abb";s:14:"mod2/index.php";s:4:"8cfb";s:19:"mod2/moduleicon.gif";s:4:"0d38";s:19:"mod2/stylesheet.css";s:4:"d41d";}',
	'suggests' => array(
	),
);

?>