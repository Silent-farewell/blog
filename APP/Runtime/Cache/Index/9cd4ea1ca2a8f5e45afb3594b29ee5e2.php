<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8"> 
	<link rel="shortcut icon" href="__PUBLIC__/Images/favicon.ico">
	<title>但愿人长久</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css">
	<link rel="stylesheet" href="__PUBLIC__/Css/bootstrap.min.css">
	<link rel="stylesheet" href="__ROOT__/Data/Ueditor/third-party/SyntaxHighlighter/shCoreDefault.css">
	<link rel="stylesheet" type="text/css" href="__ROOT__/Data/font-awesome-4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="__ROOT__/Data/Ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
	<script type="text/javascript">
		SyntaxHighlighter.all();
	</script>
	<script src="__PUBLIC__/Js/jquery-3.1.1.min.js"></script>
	<script src="__PUBLIC__/Js/bootstrap.min.js"></script>
</head>
<body>
	<!--导航栏-->
	<header class="navbar navbar-inverse navbar-fixed-top" id="toubu">
	<div class="container">
        <div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"  style="color:white;">但愿人长久</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php" style="color:white;">主页</a></li>
            <?php
 $_nav_cate = M('cate')->order("sort ASC")->select(); import('Class.Category', APP_PATH); $_nav_cate = Category::unlimitedForLayer($_nav_cate); foreach ($_nav_cate as $_nav_cate_v) : extract($_nav_cate_v); $url = U('/c_' . $id); ?><li class='dropdown'>
			<a href="<?php echo ($url); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"  aria-expanded="false"><?php echo ($name); ?> <span class="caret"></span></a>
			<ul  class="dropdown-menu" style="background-color: #009688;">
				<?php if(is_array($child)): foreach($child as $key=>$v): ?><li><a href="<?php echo U('/c_' . $v['id']);?>" target="_blank" ><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
			</ul>
		</li><?php endforeach;?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      </header>
	<!--导航栏-->

<!--主体-->
	<div class="container">
	<div class="row clearfix" id="zhuti">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-9 column" >
					
					<ol class="breadcrumb">
					    <li><a href="index.php">首页</a></li>
					    <?php $last = count($parent) - 1; ?>
					    <?php if(is_array($parent)): foreach($parent as $key=>$v): ?><li class="active"><a href="<?php echo U('/c_' . $v['id']);?>"><?php echo ($v["name"]); ?></a><?php if($key != $last): endif; ?></li><?php endforeach; endif; ?>
					</ol>

					<div class="title">
						<h2 class="blog-post-title"><?php echo ($blog["title"]); ?></h2>
						<p class="blog-post-meta" style="color:gray;"><?php echo (date('Y年m月d日', $blog["time"])); ?> </p>
					</div>
					<div class='content' style="word-break:break-all"><?php echo ($blog["content"]); ?></div>
					<hr>
				</div>
	<!--主体右侧-->
		<!--主体右侧-->
<div class="col-md-3 column">
	<div class="list-group list-success" style="list-style-type: none;">
	<p href="#" class="list-group-item active" style="background-color:#009688;border:0">
	音乐播放器
	</p>
	<div class="container" style="max-width: 100%;
         margin-left: auto;
         margin-right: auto;padding-left: 0;padding-right: 0;">
         <div id="player" class="aplayer"></div>
      </div>
      <script src="__PUBLIC__/Js/APlayer.min.js"></script>
      <script>
         var ap = new APlayer({
             element: document.getElementById('player'),
             narrow: false,
             autoplay: false,
             showlrc: 1,
             mutex: true,
             theme: '#615754',
             mode: 'circulation',
             
             music: [
                 
                 {
                     title: 'Tears',
                     author: '赵海洋',
                     url: 'http://p2.music.126.net/39TZ-pQskOLDHTuz11zC8g==/7781243790300676.mp3',
                     pic: 'http://p3.music.126.net/juYqyXeiw17v19yn_x9uFg==/109951162836109076.jpg',
                     lrc: '[00:00.070]---\n[00:10.070]如果我们举止有礼\n[00:12.510]言谈有善\n[00:14.590]我们就能粗暴地对待许多人\n[00:16.890]而安然无恙\n[00:55.070]谦虚对才华无奇的人来说\n[00:57.160]只是一种诚实\n[00:59.330]对才华绝顶的人来说\n[01:01.550]是一种虚伪\n[01:40.550]尽管在人的一生中\n[01:42.550]外在变化不断发生\n[01:44.550]但人的性格却始终如一\n[01:46.550]这好比虽然有一连串的变奏\n[01:48.810]但主旋律却维持不变\n[01:50.810]无人能够脱离自身个性\n[02:45.810]不要让自己的大脑\n[02:47.810]变成别人思想的跑马场\n[03:00.810]在自己的内心求得幸福很难\n[03:02.810]在别处则不可能找到幸福\n[03:20.810]一个人渴望什么\n[03:22.810]他就会相信什么\n[03:33.810]来自叔本华\n',
                 },
                 
                 {
                     title: '天堂',
                     author: '腾格尔',
                     url: 'http://p2.music.126.net/lh4PdwhXi9RaF8jgd3n-bw==/7709775535237988.mp3',
                     pic: 'http://p4.music.126.net/uAT4CcsZdcAYs-CS0hr-0w==/93458488378219.jpg',
                     lrc: '[01:17.070]蓝蓝的天空 清清的湖水 哎耶\n[01:32.510]绿绿的草原 这是我的家 哎耶\n[01:47.590]奔驰的骏马 洁白的羊群 哎耶\n[02:02.890]还有你姑娘 这是我的家 哎耶\n[02:21.070]我爱你我的家 我的家我 的天堂\n[02:37.160]我爱你我的家 我的家我 的天堂\n[02:52.610]\n[03:11.330]蓝蓝的天空 清清的湖水 哎耶\n[03:26.550]绿绿的草原 这是我的家 哎耶\n[03:41.810]奔驰的骏马 洁白的羊群 哎耶\n[03:57.100]还有你姑娘 这是我的家 哎耶\n[04:15.240]我爱你我的家 我的家 我的天堂\n[04:31.440]我爱你我的家 我的家 我的天堂\n',
                 },
                 
                 {
                     title: '但愿人长久',
                     author: '张国荣',
                     url: 'http://p2.music.126.net/x2QwtpS8tc6IrCS-KiI5-w==/1083018953367684.mp3',
                     pic: 'http://p3.music.126.net/cPvHx6I7N_lhNry0_5s_fg==/24189255823154.jpg',
                     lrc: '[02:08.68][00:17.78]借夜澜静处\n[02:13.65][00:22.42]独看天涯星\n[02:18.05][00:26.80]每夜繁星不变\n[02:22.36][00:30.96]每夜长照耀\n[00:34.21]\n[03:07.71][02:26.36][01:16.86][00:34.71]但愿人没变\n[03:12.49][02:31.08][01:21.40][00:39.73]愿似星长久\n[03:17.00][02:35.48][01:25.58][00:44.12]每夜如星闪照\n[03:21.30][02:39.86][01:30.09][00:48.38]每夜常在\n[01:34.19]\n[02:45.09][00:53.72]漫长夜晚星若可不休\n[02:49.47][00:58.27]问人怎么却不会永久\n[02:53.75][01:02.72]但愿留下是光辉像星闪照\n[02:58.19][01:07.25]漆黑漫长夜\n',
                 },
                 
                 {
                     title: '南山南',
                     author: '马頔',
                     url: 'http://p2.music.126.net/TWEZak4DArGaZNWC92uA6g==/2535473813929831.mp3',
                     pic: 'http://p4.music.126.net/WkzQgHTnH1Yf4BXQVgktOg==/6648746813825382.jpg',
                     lrc: '[00:00.00] 作曲 : 马頔\n[00:00.120] 作词 : 马頔\n[00:00.360]你在南方的艳阳里大雪纷飞\n[00:07.260]我在北方的寒夜里四季如春\n[00:14.020]如果天黑之前来得及\n[00:17.660]我要忘了你的眼睛\n[00:21.510]穷极一生做不完一场梦\n[00:29.310]他不再和谁谈论相逢的孤岛\n[00:36.310]因为心里早已荒芜人烟\n[00:43.540]他的心里再装不下一个家\n[00:51.020]做一个只对自己说谎的哑巴\n[00:58.100]他说你任何为人称道的美丽\n[01:01.910]不及他第一次遇见你\n[01:06.590]时光苟延残喘无可奈何\n[01:13.150]如果所有土地连在一起\n[01:16.680]走上一生只为拥抱你\n[01:20.390]喝醉了他的梦，晚安\n[01:28.160]\n[02:12.640]他听见有人唱着古老的歌\n[02:19.530]唱着今天还在远方发生的\n[02:27.310]像在她眼睛里看到的孤岛\n[02:34.280]没有悲伤但也没有花朵\n[02:42.090]你在南方的艳阳里大雪纷飞\n[02:49.930]我在北方的寒夜里四季如春\n[02:56.800]如果天黑之前来得及\n[03:00.030]我要忘了你的眼睛\n[03:03.850]穷极一生做不完一场梦\n[03:11.670]你在南方的艳阳里大雪纷飞\n[03:19.470]我在北方的寒夜里四季如春\n[03:26.020]如果天黑之前来得及\n[03:29.740]我要忘了你的眼睛\n[03:33.700]穷极一生做不完一场梦\n[03:41.160]大梦初醒荒唐了一生\n[03:48.570]南山南，北秋悲\n[03:56.140]南山有谷堆\n[04:03.390]南风喃，北海北\n[04:10.790]北海有墓碑\n[04:18.110]南山南，北秋悲\n[04:25.550]南山有谷堆\n[04:32.930]南风喃，北海北\n[04:40.320]北海有墓碑\n[04:47.730]北海有墓碑\n',
                 },
                 
                 {
                     title: '约定',
                     author: '陈奕迅',
                     url: 'http://p2.music.126.net/OOyEMDnT_3kzpokfQv1SzA==/6626756580716132.mp3',
                     pic: 'http://p3.music.126.net/ZtoKxe3R-vHB6cP5zhS3Sg==/84662395351492.jpg',
                     lrc: '[00:14.850]还记得当天旅馆的门牌\n[00:21.620]还留住笑著离开的神态\n[00:29.080]当天整个城市 那样轻快\n[00:35.829]沿路一起走半哩长街\n[00:42.919]还记得街灯照出一脸黄\n[00:50.290]还燃亮那份微温的便档\n[00:56.499]剪影的你轮廓太好看\n[01:02.469]凝住眼泪才敢细看\n[01:12.259]忘掉天地 彷佛也想不起自己\n[01:18.739]仍未忘相约看漫天黄叶远飞\n[01:25.909]就算会与你分离 凄绝的戏\n[01:31.870]要决心忘记我便记不起\n[01:38.489]明日天地 只恐怕认不出自己\n[01:44.749]仍未忘跟你约定假如没有死\n[01:51.729]就算你壮阔胸膛 不敌天气\n[01:58.249]两鬓斑白都可认得你\n[02:33.720]还记得当天吉他的和弦\n[02:39.810]还明白每段旋律的伏线\n[02:46.429]当天街角流过你声线\n[02:52.429]沿路旅程如歌褪变\n[03:01.800]忘掉天地 彷佛也想不起自己\n[03:07.500]仍未忘相约看漫天黄叶远飞\n[03:13.950]就算会与你分离 凄绝的戏\n[03:19.840]要决心忘记我便记不起\n[03:25.990]明日天地 只恐怕认不出自己\n[03:32.400]仍未忘跟你约定假如没有死\n[03:38.690]就算你壮阔胸膛 不敌天气\n[03:44.740]两鬓斑白都可认得你\n[03:57.679]就算你壮阔胸膛 不敌天气\n[04:06.080]两鬓斑白都可认得你\n[04:38.380]多谢 有一位朋友\n[04:48.780]我唔知大家是不是 我就挂念了他七年\n[04:54.080]今次是他嘅死祭\n[04:57.080]他在生之前同我说讲过一句 好关心我的说话\n[05:05.080]但我一直都没有机会同他讲一句\n[05:07.980]在面对面回覆他一句说话\n[05:11.280]这件事令我觉得 大家有机会讲的时候\n[05:16.980]尽快讲 不要再留 别考虑那么多\n[05:23.780]但唔紧要 我知他现在都听到我们的\n[05:27.680] 哥哥 今晚接下来这首歌是代表了我对你的心声 多谢你！\n',
                 },
                 
                 {
                     title: 'Hotel California',
                     author: 'Don Felder',
                     url: '__PUBLIC__/Music/Hotel California.mp3',
                     pic: 'http://p4.music.126.net/NR7Uk17046EQvYni7Nhi0Q==/18346451021765591.jpg',
                     lrc: '[00:00.850]吉他指弹\n',
                 },
                 
                 {
                     title: '年轮',
                     author: '张碧晨',
                     url: 'http://p2.music.126.net/kJcquT9x0VKubRrih0RHHQ==/2934596537172282.mp3',
                     pic: 'http://p3.music.126.net/5D4hfLdRezRlax4OWiPgnw==/2899412164997218.jpg',
                     lrc: '[00:00.00] 作曲 : 汪苏泷\n[00:00.324] 作词 : 汪苏泷\n[00:09.974]\n[00:18.739]圆圈勾勒成指纹\n[00:22.268]印在我的嘴唇\n[00:25.101]回忆苦涩的吻痕\n[00:28.500]是树根\n[00:31.798]春去秋来的茂盛\n[00:35.125]却遮住了黄昏\n[00:38.348]寒夜剩我一个人\n[00:41.534]等清晨\n[00:44.722]世间最毒的仇恨\n[00:48.000]是有缘却无分\n[00:51.240]可惜你从未心疼\n[00:54.477]我的笨\n[00:57.681]荒草丛生的青春\n[01:01.110]倒也过的安稳\n[01:04.165]代替你陪着我的\n[01:07.384]是年轮\n[01:09.935]数着一圈圈年轮\n[01:13.310]我认真\n[01:14.963]将心事都封存\n[01:18.110]密密麻麻是我的自尊\n[01:22.895]修改一次次离分\n[01:26.283]我承认\n[01:27.869]曾幻想过永恒\n[01:30.864]可惜从没人陪我演这剧本\n[01:46.421]圆圈勾勒成指纹\n[01:49.559]印在我的嘴唇\n[01:52.850]回忆苦涩的吻痕\n[01:55.965]是树根\n[01:59.292]春去秋来的茂盛\n[02:02.567]却遮住了黄昏\n[02:05.876]寒夜剩我一个人\n[02:09.510]等清晨\n[02:12.304]世间最毒的仇恨\n[02:15.516]是有缘却无分\n[02:18.798]可惜你从未心疼\n[02:21.887]我的笨\n[02:25.275]荒草丛生的青春\n[02:28.508]倒也过的安稳\n[02:31.702]代替你陪着我的\n[02:34.980]是年轮\n[02:37.479]数着一圈圈年轮\n[02:40.708]我认真\n[02:42.247]将心事都封存\n[02:45.455]密密麻麻是我的自尊\n[02:50.407]修改一次次离分\n[02:53.737]我承认\n[02:55.240]曾幻想过永恒\n[02:58.492]可惜从没人陪我演这剧本\n[03:27.145]一圈圈年轮\n[03:29.136]我认真\n[03:30.948]将心事都封存\n[03:34.214]密密麻麻是我的自尊\n[03:39.150]修改一次次离分\n[03:42.172]我承认\n[03:44.200]曾幻想过永恒\n[03:47.149]可惜从没人陪我演这剧本\n[03:53.587]可惜从没人陪我演这剧本\n',
                 },
                 
                 {
                     title: '谁伴我闯荡',
                     author: 'Beyond',
                     url: 'http://p2.music.126.net/b7xzPEqN7SLILYRug4F98Q==/1102810162668171.mp3',
                     pic: 'http://p4.music.126.net/IsjnGL2ba6FhEHnmB4GQ5g==/25288767450916.jpg',
                     lrc: '[00:21.280]前面是哪方\n[00:25.000]谁伴我闯荡\n[00:28.740]沿路没有指引\n[00:31.300]若我走上又是窄巷\n[00:35.870]寻梦象扑火\n[00:38.040]谁共我疯狂\n[00:41.750]长夜渐觉冰冻\n[00:44.770]但我只有尽量去躲\n[00:47.000]几多天真的理想\n[00:51.030]几多找到是颓丧\n[00:54.540]沉默去迎失望\n[00:58.080]几多心中创伤\n[01:01.850]只有淡忘\n[01:04.010]从前话说要如何\n[01:08.100]其实你与昨日的我\n[01:11.070]活到今天变化甚多\n[01:15.520]只有顽强\n[01:18.250]明日路纵会更彷徨\n[01:21.500]疲倦惯了再没感觉\n[01:24.060]别再可惜计较什么\n[01:55.390]谁愿夜探访\n[01:58.720]留在我身旁\n[02:02.050]陪伴渡过黑暗\n[02:05.040]让我驱散寂寞痛楚\n[02:08.790]寻觅没结果\n[02:12.100]谁伴我闯荡\n[02:15.410]期望暴雨飘去\n[02:18.380]便会冲破命运困锁\n[02:21.090]几多天真的理想\n[02:25.050]几多找到是颓丧\n[02:28.480]沉默去迎失望\n[02:32.180]几多心中创伤\n[02:35.480]只有淡忘\n[02:38.460]从前话说要如何\n[02:41.760]其实你与昨日的我\n[02:45.580]活到今天变化甚多\n[02:48.870]只有顽强\n[02:51.810]明日路纵会更彷徨\n[02:55.140]疲倦惯了再没感觉\n[02:58.580]别再可惜计较什么\n[03:02.250]只有淡忘\n[03:05.210]从前话说要如何\n[03:08.580]其实你与昨日的我\n[03:11.890]活到今天变化甚多\n[03:15.080]只有顽强\n[03:18.570]明日路纵会更彷徨\n[03:21.900]疲倦惯了再没感觉\n[03:25.280]别再可惜计较什么\n[03:28.200]始终上路过\n',
                 },
                 
                 {
                     title: '演员',
                     author: '薛之谦',
                     url: 'http://p2.music.126.net/WddsKHFgZv5-uS8mXxREcA==/3233663700533995.mp3',
                     pic: 'http://p4.music.126.net/qpvBqYIqkRhO9Ry2qOCdJQ==/2942293117852634.jpg',
                     lrc: '[00:00.00] 作曲 : 薛之谦\n[00:01.00] 作词 : 薛之谦\n[00:04.200]\n[00:21.120]简单点说话的方式简单点\n[00:28.560]\n[00:30.200]递进的情绪请省略\n[00:33.640]你又不是个演员\n[00:36.380]别设计那些情节\n[00:39.360]\n[00:41.930]没意见我只想看看你怎么圆\n[00:50.410]\n[00:51.540]你难过的太表面 像没天赋的演员\n[00:57.150]观众一眼能看见\n[01:00.190]\n[01:02.220]该配合你演出的我演视而不见\n[01:07.680]在逼一个最爱你的人即兴表演\n[01:12.900]什么时候我们开始收起了底线\n[01:18.020]顺应时代的改变看那些拙劣的表演\n[01:23.420]可你曾经那么爱我干嘛演出细节\n[01:28.630]我该变成什么样子才能延缓厌倦\n[01:33.870]原来当爱放下防备后的这些那些\n[01:39.370]才是考验\n[01:41.970]\n[01:44.600]没意见你想怎样我都随便\n[01:52.890]\n[01:54.530]你演技也有限\n[01:57.580]又不用说感言\n[02:00.150]分开就平淡些\n[02:02.990]\n[02:05.000]该配合你演出的我演视而不见\n[02:10.530]别逼一个最爱你的人即兴表演\n[02:15.810]什么时候我们开始没有了底线\n[02:21.010]顺着别人的谎言被动就不显得可怜\n[02:26.430]可你曾经那么爱我干嘛演出细节\n[02:31.520]我该变成什么样子才能配合出演\n[02:36.720]原来当爱放下防备后的这些那些\n[02:41.860]都有个期限\n[02:44.600]\n[02:47.560]其实台下的观众就我一个\n[02:53.040]其实我也看出你有点不舍\n[02:58.340]场景也习惯我们来回拉扯\n[03:02.930]还计较着什么\n[03:07.390]\n[03:08.710]其实说分不开的也不见得\n[03:14.040]其实感情最怕的就是拖着\n[03:19.210]越演到重场戏越哭不出了\n[03:24.070]是否还值得\n[03:28.120]\n[03:29.070]该配合你演出的我尽力在表演\n[03:34.390]像情感节目里的嘉宾任人挑选\n[03:39.680]如果还能看出我有爱你的那面\n[03:44.820]请剪掉那些情节让我看上去体面\n[03:50.040]可你曾经那么爱我干嘛演出细节\n[03:55.310]不在意的样子是我最后的表演\n[04:01.050]是因为爱你我才选择表演 这种成全\n',
                 },

                 {
                     title: 'Yesterday Once More',
                     author: 'Carpenters',
                     url: 'http://p2.music.126.net/NyARnw1bvUMizaADjMi3RA==/2006608720701332.mp3',
                     pic: 'http://p3.music.126.net/Tfiad_1N1ko6iI-q1D_ZiA==/737772302281979.jpg',
                     lrc: '[00:00.00] 作曲 : Richard Carpenter and John Bettis\n[00:00.959] 作词 : Richard Carpenter and John Bettis\n[00:02.879]When i was young i&#39;d listen to the radio\n[00:08.918]waiting for my favorite songs\n[00:14.559]When they played i&#39;d sing along,\n[00:19.259]it make me smile.\n[00:23.909]Those were such happy times and not so long ago\n[00:32.298]how i wondered where they&#39;d gone.\n[00:37.890]But they&#39;re back again just like a long lost friend\n[00:43.979]all the songs i love so well.\n[00:49.239]Every shalala every wo&#39;wo\n[00:55.829]still shines.\n[01:01.679]Every shing-a-ling-a-ling\n[01:04.249]that they&#39;re starting\n[01:06.990]to sing so fine\n[01:13.119]When they get to the part\n[01:15.669]Where he&#39;s breaking her heart\n[01:19.900]It can really make me cry\n[01:24.200]just like before.\n[01:29.289]It&#39;s yesterday once more.\n[01:38.890](shoobie do lang lang)\n[01:42.178]Looking back on how it was in years gone by\n[01:47.828]and the good times that I had\n[01:54.190]makes today seem rather sad,\n[01:58.349]so much has changed.\n[02:07.390]It was songs of love that i would sing to them\n[02:11.228]and i&#39;d memorise each word.\n[02:16.168]Those old melodies still sound so good to me\n[02:23.198]as they melt the years away\n[02:29.390]every shalala every wo&#39;wo still shines\n[02:39.998]every shing-a-ling-a-ling\n[02:42.327]that they&#39;re startingto sing\n[02:45.648]so fine\n[02:51.577]all my best memorise come back clearly to me\n[02:56.868]Some can even make me cry\n[03:01.879]just like before.\n[03:07.698]It&#39;s yesterday once more.\n[03:10.659](shoobie do lang lang)\n[03:14.898]Every shalala every wo&#39;wo still shines.\n[03:26.238]Every shing-a-ling-a-ling\n[03:29.398]that they&#39;re starting to sing\n[03:31.668]so fine\n[03:36.898]Every shalala every wo&#39;wo still shines.\n',
                 },

                 {
                     title: '你的眼神',
                     author: '张国荣',
                     url: 'http://p2.music.126.net/Ljnof1E-9MDbPOpJ9XLUMg==/6668538022872618.mp3',
                     pic: 'http://p3.music.126.net/hEv1KCha_LFNZ2fZvcLPDA==/6642149743806574.jpg',
                     lrc: '[00:23.73]像一阵细雨洒落我心底\n[00:29.80]那感觉如此神秘\n[00:35.91]我不禁抬起头 看着你\n[00:41.74]而你却并不露痕迹\n[00:47.26]\n[00:50.39]纵然默言不语 叫人难忘记\n[01:03.11]那是你的眼神 神秘充满诗意\n[01:09.15]啊 爱情天地 我满心欢喜\n[01:21.43]\n[01:47.58]淡淡然掠过\n[01:50.53]神秘又美丽\n[01:53.48]这场似骤来的雨\n[01:59.35]我也难自禁抬头看你\n[02:05.01]你偏将心事瞒住\n[02:10.60]\n[02:13.79]就算默然不语\n[02:19.53]我都一一地记住\n[02:25.48]因你的眼神\n[02:28.40]使我心里着迷\n[02:31.32]啊 已将我心\n[02:37.98]轻轻地留住\n[02:43.29]\n[03:12.39]纵然默言不语 叫人难忘记\n[03:24.10]那是你的眼神 神秘充满诗意\n[03:29.99]啊 爱的天地 我满心欢喜\n',
                 },
                 
             ]
             
         });
      </script>
	</div>

	<?php echo W('New', array('limit' => 5));?>
		
	
	<div class="list-group list-success">
	<p href="#" class="list-group-item active" style="background-color:#009688;border:0">
	最热文章
	</p>
	<?php $field = array("id", "title", "click");$_hot_blog = M("blog")->field($field)->limit(5)->order("click DESC")->select();foreach ($_hot_blog as $_hot_value):extract($_hot_value);$url = U("/" . $id);?><a href="<?php echo ($url); ?>" class="list-group-item" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?php echo ($title); ?></a><?php endforeach;?>
	</div>

	<?php echo W('Friend');?>
	
</div>
			</div>
		</div>
	</div>
</div><!--container-->
<!--底部-->
			
	<footer style="padding: 40px 0;color: #999;text-align: center;background-color: #f9f9f9;border-top: 1px solid #e5e5e5;">
      <p>博客 <a href="Admin" target="_blank">dashbord</a> by <a href="#">@但愿人长久</a>.</p>
      <p>
        <a href="#">回到顶部</a>
      </p>
    </footer>
	
</body>
</html>