-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 06 月 14 日 17:56
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_database`
--

-- --------------------------------------------------------

--
-- 表的结构 `con_drink`
--

CREATE TABLE IF NOT EXISTS `con_drink` (
  `d_id` int(10) NOT NULL AUTO_INCREMENT,
  `d_g_id` int(10) DEFAULT NULL,
  `d_name` varchar(80) NOT NULL,
  `d_price` varchar(20) NOT NULL,
  `d_num` int(100) NOT NULL,
  `d_content` varchar(1024) NOT NULL,
  `d_pic` varchar(1024) NOT NULL,
  PRIMARY KEY (`d_id`),
  KEY `con_drink` (`d_g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `con_drink`
--

INSERT INTO `con_drink` (`d_id`, `d_g_id`, `d_name`, `d_price`, `d_num`, `d_content`, `d_pic`) VALUES
(6, NULL, '橙汁', '15元', 58, '  100%橙汁风味口感俱佳，果肉营养更真实可见。一杯100%橙汁甜可口的味道刺激食欲，让您胃口大开，醇厚果汁中的水分携带水果营养渗透进身体里的每一个细胞，让你感觉一整天都干劲十足。', './chengzhi.jpg'),
(7, NULL, '葡萄酒', '50元', 80, '果香浓郁、丝般顺滑的葡萄酒，当我们吞下酒液后，我们可以静静地体会唇齿留香的终极享受！', './putapj.jpg'),
(8, NULL, '鸡尾酒', '100元', 80, '由北美的威士忌（波旁或加拿大）、红Vermouth、少量Angostura苦精调制而成，最后加上罐头红樱桃。作为烈酒，口感扎实，但是因为有充足的甜味修饰，所以比Martini好入口', './jiweijiu.jpg'),
(9, NULL, '可乐', '25元', 60, '以可乐汽水搭配美味火锅的吃法，已经成为了众多追求美味层出不穷的食客们所青睐的潮流。可乐汽水冰爽到底的口感，配以香热火锅中层次丰富的食材和口味，瞬间即能激发人们味蕾上的无限爽动，极致美味溢于言表，', './kel.jpg'),
(10, NULL, '奶昔', '30元', 38, '奶昔有很多种，草莓奶昔、香草奶昔、芒果奶昔等。这些奶昔中加入了鲜果，富含有维生素C等物质，能够使细胞黑色素沉着减少，减少黑斑和雀斑，使皮肤白皙', './naixi.jpg'),
(11, NULL, '清茶', '80元', 80, '泡之后，有一股如梅似兰的清香。其滋味醇厚回甘，品饮时有“喉韵”的特殊感受，即茶汤过喉徐徐生津，而有回味，细加品味，似嚼之有物。香气清冽，浓而不涩，以第二、第三泡为最佳', './qingcha.jpg'),
(12, NULL, '柠檬薄荷', '70元', 80, '薄荷的清凉，柠檬的清香，很清淡生津，作为平常之饮水也无妨，而且柠檬还有美白和补充维生素C的作用。', './ningmbohe.jpg'),
(13, NULL, '酸奶', '50元', 80, '以新鲜的牛奶为原料，加入一定比例的蔗糖，经过高温杀菌冷却后，再加入纯乳酸菌种培养而成的一种奶制品，口味酸甜细滑，营养丰富', './suann.jpg'),
(14, NULL, '西瓜汁', '30元', 80, '口味清甜细腻，冰镇之后口感更好。夏季备受人青睐', './xiguaz.jpg'),
(15, NULL, '蔬菜汁', '50元', 80, '蔬菜汁是由各种蔬菜所榨的汁。蔬菜瓜果除了可以做成可口的菜肴外，还可以制成富含抗氧化物的果蔬汁饮品。因为新鲜水果蔬菜汁能有效为人体补充维生素以及钙、磷、钾、镁等矿营养物质，可以调整人体功能协调', './shucaiz.jpg'),
(16, NULL, '啤酒', '20元', 80, '原产丹麦，世界销量第一的啤酒，味道适中，喝起来有一种很亲切的感觉,同时也是最适合冰饮的啤酒，在炎热的夏天来一杯冰爽的嘉士伯，清澈透心，超乎想象', './pij.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `con_meat`
--

CREATE TABLE IF NOT EXISTS `con_meat` (
  `m_id` int(10) NOT NULL AUTO_INCREMENT,
  `m_g_id` int(10) DEFAULT NULL,
  `m_name` varchar(80) NOT NULL,
  `m_price` varchar(20) NOT NULL,
  `m_num` int(100) NOT NULL,
  `m_content` varchar(1024) NOT NULL,
  `m_pic` varchar(1024) NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `con_meat` (`m_g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `con_meat`
--

INSERT INTO `con_meat` (`m_id`, `m_g_id`, `m_name`, `m_price`, `m_num`, `m_content`, `m_pic`) VALUES
(4, NULL, '肥牛', '25元', 74, '选用的牛肉是经过特殊饲料喂养的牛肉，肉质细腻，入口滑嫩，实属牛肉中的精品；其口味香甜悠长，回味无穷', './feiniu.jpg'),
(5, NULL, '毛肚', '20元', 80, '毛肚口感口感脆嫩，爽口化渣，几乎是火锅必上的一道菜。毛肚，其实是牛的四个胃中第三个胃，胃内有许多大小不同的叶瓣，叶瓣表面有粗膜', './maodu.jpg'),
(6, NULL, '墨鱼丸', '15元', 80, '墨魚丸是利用碎墨魚肉或豬肉拌入生粉製成的肉丸，表面色泽洁白，入口富有弹性，口感爽脆，是火鍋的食品之一', './moyuwan.png'),
(7, NULL, '牛肉', '28元', 80, '肉并不是入口即化的好，而是对牙齿有着微妙的抵抗力和反弹，才能算是一口有品格的肉。牛肉从不冷冻，直接切成薄薄的薄片下牛骨熬成的清汤锅底涮着吃，这种对牛肉新鲜的苛求、对本味的执着以及对弹劲偏执，反而让牛肉变得不普通。', './niurou.jpg'),
(8, NULL, '虾', '28元', 80, '不管何种虾，都含有丰富的蛋白质，营养价值很高，其肉质和鱼一样松软，易消化，而且无腥味和骨刺，同时含有丰富的矿物质（如钙、磷、铁等），海虾还富含碘质，对人类的健康极有裨益', './xai.jpg'),
(9, NULL, '鸭肠', '25元', 80, '鸭肠富含蛋白质、B族维生素、维生素C、维生素A和钙、铁等微量元素。对人体新陈代谢，神经、心脏、消化和视觉的维护都有良好的作用。', './yachang.jpg'),
(10, NULL, '羊排卷', '26元', 80, '羊肉性温，冬季常吃羊肉，不仅可以增加人体热量，抵御寒冷，而且还能增加消化酶，保护胃壁，修复胃粘膜，帮助脾胃消化，起到抗衰老的作用', './yangpaijuan.jpg'),
(11, NULL, '鱿鱼须', '20元', 80, '鱿鱼中含有丰富的钙、磷、铁元素，对骨骼发育和造血十分有益，可预防贫血。散发出让人难以抗拒的香味', './youyuxu.jpg'),
(12, NULL, '鱼头', '28元', 80, '鱼头具有营养高、口味好、富含人体必需的卵磷脂和不饱和脂肪酸。对降低血脂、健脑及延缓衰老有好处。鱼头对于部分人来说虽是美味，但要注意少食', './yutou.jpg'),
(13, NULL, '西式牛滑', '30元', 80, '牛滑也就是纯正的牛肉丸，具体做法呢就是牛滑用上好的牛肉切细剁成泥，和以勾芡，用特制的牛骨高汤煮熟,入口滑润，口感超级棒', './xishiniuhua.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `con_special`
--

CREATE TABLE IF NOT EXISTS `con_special` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_g_id` int(10) DEFAULT NULL,
  `s_name` varchar(80) NOT NULL,
  `s_price` varchar(20) NOT NULL,
  `s_num` int(100) NOT NULL,
  `s_content` varchar(1024) NOT NULL,
  `s_pic` varchar(1024) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `con_special` (`s_g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `con_special`
--

INSERT INTO `con_special` (`s_id`, `s_g_id`, `s_name`, `s_price`, `s_num`, `s_content`, `s_pic`) VALUES
(1, NULL, '鹌鹑蛋', '15元', 90, '鹌鹑蛋被认为是“动物中的人参”。宜常食为滋补食疗品。鹌鹑蛋所含卵磷脂和脑磷脂，比鸡蛋高出3-4倍，是高级神经活动不可缺少的营养物质，健脑、补脑效果显著', './anchund.jpg'),
(2, NULL, '脆皮肠', '10元', 90, '火锅专用脆皮肠是一种采用冷冻猪肉和鸡胸肉为主要原料，由于在涮火锅时方便，还可演变成桂花肠、腰花肠等不同形状的火锅脆皮肠，也可煎烤，香气袭人，口感脆实，非常美味，一直深受消费者的喜爱', './cuipic.jpg'),
(3, NULL, '豆花', '10元', 90, '豆花，全名豆腐花，又称豆腐脑或豆冻，是由黄豆浆凝固后形成的中式食品。不过豆花比豆腐更加嫩软，在岭南通常加入糖水或黑糖食用', './douhua.jpg'),
(4, NULL, '酥肉', '15元', 90, '酥肉此道菜特点就是香酥、嫩滑、爽口、肥而不腻，不喜欢吃辣椒的朋友一定会喜欢的，一碗酥肉出锅时，色泽鲜艳、酥而不烂、肥而不腻、香气外溢，吃起来不仅味美汤鲜，而且营养丰富', './surou.jpg'),
(5, NULL, '血旺', '15元', 90, '血旺火锅是四川民间火锅品种，一般用鸡血、猪血制作。但本款火锅则用牛血旺制作，成品香辣鲜美，软嫩细滑，久食不腻，开胃生津。', './xuewang.jpg'),
(6, NULL, '猪蹄', '30元', 88, '猪脚又叫猪蹄、猪手、猪肘子，富含胶原蛋白，是美容养颜佳品。猪脚分前后两种，前蹄肉多骨少，呈直形，后蹄肉少骨稍多，呈弯形。常见的烹饪方法有酱，卤，烧，烤，炖等。中医认为猪蹄性平，味甘咸，是一种类似熊掌的美味菜肴及治病“良药', './zhuti.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `con_vegetable`
--

CREATE TABLE IF NOT EXISTS `con_vegetable` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `v_g_id` int(10) DEFAULT NULL,
  `v_name` varchar(80) NOT NULL,
  `v_price` varchar(20) NOT NULL,
  `v_num` int(100) NOT NULL,
  `v_content` varchar(1024) NOT NULL,
  `v_pic` varchar(1024) NOT NULL,
  PRIMARY KEY (`v_id`),
  KEY `con_vegetable` (`v_g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `con_vegetable`
--

INSERT INTO `con_vegetable` (`v_id`, `v_g_id`, `v_name`, `v_price`, `v_num`, `v_content`, `v_pic`) VALUES
(2, NULL, '菠菜', '7元', 90, '菠菜有“营养模范生”之称，它富含类胡萝卜素、维生素C、维生素K、矿物质（钙质、铁质等）、辅酶Q10等多种营养素', './bocai.jpg'),
(3, NULL, '大白菜', '6元', 90, '大白菜含多种维生素、无机盐、纤维素及一定量的碳水化合物、蛋白质、脂肪等营养成分，有“百菜之王”的美誉', './dabaicai.jpg'),
(4, NULL, '豆腐皮', '6元', 90, '其薄如纸张，筋似皮条，色美味香，价廉物美。用豆腐皮做的各种冷、热、荤、素菜，其味道之香，令人望而流涎', './doufupi.jpg'),
(5, NULL, '年糕', '8元', 90, '年糕不仅是一种节日美食，而且岁岁为人们带来新的希望，寓意万事如意年年高。鲜甜微辣的浓郁汤汁咕咚咕咚地沸腾，Q 弹的年糕中间流出浓醇无比的芝士', './niangao.jpg'),
(6, NULL, '木耳', '6元', 90, '味道鲜美，可素可荤，营养丰富。木耳味甘，性平，具有很多药用功效。能益气强身，有活血效能，并可防治缺铁性贫血等;可养血驻颜，令人肌肤红润，容光焕发，能够疏通肠胃。', './mue.jpg'),
(7, NULL, '平菇', '8元', 90, '平菇性味甘、温；具有追风散寒、舒筋活络的功效；用干治腰腿疼痛、手足麻木、筋络不通等病症。常食平菇不仅能起到改善人体的新陈代谢，改善人体新陈代谢、增强体质都有一定的好处', './pinggu.jpg'),
(8, NULL, '生菜', '6元', 80, '生菜是最合适生吃的蔬菜。生菜含有丰富的营养成分，其纤维和维生素C比白菜多', './shengcai.jpg'),
(9, NULL, '茼蒿', '6元', 80, '茼蒿的根、茎、叶都可食用，含有广泛而丰富的营养，尤其是胡萝卜素和矿物质含量较高。其纤维细嫩，容易消化吸收，对儿童发育成长和老年人胃肠吸收不良均很有好处。另外，茼蒿中铁的含量较多，对儿童生长发育及贫血患者有一定帮助', './tonghao.jpg'),
(10, NULL, '玉米', '7元', 80, '玉米中还含有多种人体必需的氨基酸，能促进人的大脑细胞正常代谢，有利于排除脑组织中的氨。玉米的胚芽和花粉里含有大量维生素E.可增强人的体力和耐力，中老年人常吃玉米制品可延缓衰老', './yumi.jpg'),
(11, NULL, '红薯粉', '8元', 80, '粉条有良好的附味性，它能吸收各种鲜美汤料的味道，再加上粉条本身的柔润嫩滑，更加爽口宜人。真正的绿色粉条具备红薯的多数养身功能', './hongshuf.jpg'),
(12, NULL, '娃娃菜', '10元', 80, '娃娃菜是种"超小白菜"，但它的钾含量却比白菜高很多。据测定，每百克娃娃菜中约含有287毫克的钾，而同样重量的白菜仅含钾130毫克。钾是维持神经肌肉应激性和正常功能的重要元素，经常有倦怠感的人多吃点娃娃菜可有不错的调节作用', './wawacai.jpg'),
(13, NULL, '山药', '9元', 80, '香辣爽口的火锅底料再加上被煮到入口即融的山药，山药完全吸收了里面的酱汁~那种感觉太美好了', './shanyao.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `dmcs`
--

CREATE TABLE IF NOT EXISTS `dmcs` (
  `dm_id` int(10) NOT NULL AUTO_INCREMENT,
  `dm_content` varchar(10240) NOT NULL,
  PRIMARY KEY (`dm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `dmcs`
--

INSERT INTO `dmcs` (`dm_id`, `dm_content`) VALUES
(1, '傣族是一个能歌善舞的民族、一个潇洒浪漫的民族'),
(2, '傣族少女（傣妹），是一个相貌漂亮、身材窈窕、性格活泼的群体。每天劳作完毕，傣族少女（傣妹）们便迎着 晚霞，走下竹楼，迈出竹林，来到清澈的河水边，以独特而熟练的方式脱去漂亮的孔雀服，穿上沐浴专用的筒裙，轻轻走向河中，时而垂头梳洗秀发，时而拂水湿润 面颊，时而沉水浸泡胴体，时而水中挥臂畅游，时而还嬉笑打开水仗……真可谓一幅诱人的傣家少女（傣妹）戏水图！青年男女们常用歌声来表示自己的爱慕之情，一问一答，羞涩而不俗套，十分委婉、纯朴、巧妙。《有一个美丽的地方》，它像一道清凉甘甜的山泉，从人们心中轻 轻流过，它给人们带来了温馨、带来了美好的遐想。《月光下的凤尾竹》是一首在我国极为流行的民族歌曲，它描写了傣族青年男女在明月下谈情说爱的情景。这些优美的歌声和舞蹈尤如把我们带进了那个梦幻般美丽而遥远的傣族社区。　　在傣族人看来，水是圣洁、美好、光明的象徵。阴历四月十三日至十五日，傣族一年一度的泼水节来临，澜沧江两岸顿时变成欢乐的海洋。在这历时三天的"六月年"里，第一天划龙舟、放高升、文艺表演；第二天泼水；第三天，傣族姑娘（傣妹）和小伙子一起掷包传情。花包飞来飞去，最后感情交流到一定程度，双方悄悄 退出丢包场，找一个幽静的地方依肩私语去了。');

-- --------------------------------------------------------

--
-- 表的结构 `fdfc`
--

CREATE TABLE IF NOT EXISTS `fdfc` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_pic` varchar(1024) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `fdfc`
--

INSERT INTO `fdfc` (`f_id`, `f_pic`) VALUES
(1, './5.jpg'),
(2, './6.jpg'),
(3, './8.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `fzln`
--

CREATE TABLE IF NOT EXISTS `fzln` (
  `fz_id` int(10) NOT NULL AUTO_INCREMENT,
  `fz_content` varchar(10240) NOT NULL,
  PRIMARY KEY (`fz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `fzln`
--

INSERT INTO `fzln` (`fz_id`, `fz_content`) VALUES
(1, '傣妹火锅是当前火锅餐饮业中营业面积最大，接待顾客最多的火锅餐饮连锁企业，品牌铸造、十年辉煌，我们的努力使广大消费者成为傣妹忠实的顾客，吃火锅到傣妹，这句话正在广大消费者中悄然流行。'),
(2, '公司本着不断自我创新，永做同行先锋的经营理念，努力提高全国各连锁店的管理水平，服务意识和卫生质量为您服务， 我们将用我们的礼貌,我们的热情,我们的周到,我们的微笑使您有宾至如归的享受! 品傣妹火锅，赏傣族风情！源自傣族的经典口味，利用百余种优质天然中草香料和独特的神气配方使其具有麻、辣、鲜、香，回味悠长的特点，另外我们还运用食补和外薰的中医理念达到美容健身的功效。 大众化的消费，高档的享受，经典的火锅源自傣族，正宗的火锅在傣妹! 傣妹火锅在感谢各忠实顾客朋友之余，将继续拼搏进取，用十分的热情、十分周到的服务换您一份满意！');

-- --------------------------------------------------------

--
-- 表的结构 `gly`
--

CREATE TABLE IF NOT EXISTS `gly` (
  `g_id` int(10) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(20) NOT NULL,
  `g_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `gly`
--

INSERT INTO `gly` (`g_id`, `g_name`, `g_pass`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- 表的结构 `gywm`
--

CREATE TABLE IF NOT EXISTS `gywm` (
  `g_id` int(10) NOT NULL AUTO_INCREMENT,
  `g_ad` varchar(20) NOT NULL,
  `g_cul` varchar(1024) NOT NULL,
  `g_con` varchar(1024) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `gywm`
--

INSERT INTO `gywm` (`g_id`, `g_ad`, `g_cul`, `g_con`) VALUES
(11, '休闲 时尚 火锅', '傣妹火锅是一家全国著名的餐饮连锁企业旗下有火锅、烧烤、房产等项目，总部位于上海核心商业圈---黄浦区北海路8号福申大厦19楼，目前全国有100多家大型直营店，傣妹火锅加盟有着优良的企业文化，现代化的运作模式，科学的管理制度，拥有一流的精英管理团队，现企业通过多年的精心打造，已经培养出了大量的出类拔萃的餐饮界人才。', '   傣妹本着不断自我创新，永做同行先锋的经营理念，努力提高全国各连锁店的管理水平、卫生质量和服务意识，为广大消费者提供优质的服务。\r\n   品傣妹火锅，赏傣族风情！源自傣族的经典口味，利用百余种优质天然中草香料和独特的神奇配方使其具有麻、辣、鲜、香，回味悠长的特点，另外我们还运用食补和外薰的中医理念达到美容健身的功效。\r\n   大众化的消费，高档的享受，经典的火锅源自傣族，正宗的火锅在傣妹!\r\n   傣妹火锅在感谢各忠实顾客朋友之余，将继续拼搏进取，用十分的热情、十分周到的服务换您一份满意！');

-- --------------------------------------------------------

--
-- 表的结构 `hgqy`
--

CREATE TABLE IF NOT EXISTS `hgqy` (
  `h_id` int(10) NOT NULL AUTO_INCREMENT,
  `h_pic` varchar(1024) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- 转存表中的数据 `hgqy`
--

INSERT INTO `hgqy` (`h_id`, `h_pic`) VALUES
(41, './01.jpg'),
(42, './02.jpg'),
(43, './03.jpg'),
(44, './04.jpg'),
(45, './05.jpg'),
(46, './06.jpg'),
(47, './07.JPG'),
(48, './08.jpg'),
(49, './09.jpg'),
(50, './010.jpg'),
(51, './011.jpeg'),
(52, './012.jpg'),
(53, './013.jpg'),
(55, './014.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `hgqy_con`
--

CREATE TABLE IF NOT EXISTS `hgqy_con` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `h_content` varchar(3072) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `hgqy_con`
--

INSERT INTO `hgqy_con` (`c_id`, `h_content`) VALUES
(8, '    由几种不同口味的冰淇淋、水果、巧克力酱、小点心和一个小酒精火锅等组成。 要吃冰淇淋火锅时，服务小姐先端上一个小酒精锅，火锅底料是褐色稠状的巧克力酱；接着服务小姐端上来三个小盘：一个装巧克力味、奶油味和草莓味的三色冰淇淋；一个装香蕉段、草莓片和苹果片以及其他的水果切片,还有一个则装有小甜点的拼盘。'),
(9, '吃的时候，顾客用钗子把冰淇淋放在火锅里涮一下，这时冰淇淋就像冰糖葫芦似的。放在嘴里一尝，嗯！外热里凉，既有巧克力的醇香，又有冰淇淋的清香，别有一番滋味。接着顾客可把水果、小点心也陆续放到火锅里这么一涮，一个个都成了各种风味不同的"巧克力葫芦"了。如果你也是位美食家，不妨也去品尝一下这种冰淇淋的新吃法。'),
(10, '服务员小姐会给每人面前摆上了一套餐具，有刀、叉，还有一个细长柄的小勺，都是不锈钢的，非常精致。火锅是一个小酒精火锅，火锅底料是褐色黏稠的巧克力。接着，端上来三个盘子：一个盘子装的是三色冰淇淋，有巧克力味、奶油味和草莓味；一个是水果拼盘，有香蕉段、猕猴桃片、草莓片、苹果片等；还有一个小甜点拼盘，装着各种小点心。'),
(11, '此外，每人还有一杯果汁饮料。用小勺把冰淇淋放在火锅里涮了一下，拿出来一看，就像冰糖葫芦似的，放到嘴里一尝，嗯，还别说，这冰淇淋外面是热的，里面是凉的，既有巧克力的醇香，又有冰淇淋的清香，凉的热的这么一混，真是别有一番滋味。接着，我把水果和小点心也陆续放到火锅里这么一涮，一个个都变成了"巧克力葫芦"，而每一种又各是各的口味，一凉一热，美妙极了。'),
(12, '');

-- --------------------------------------------------------

--
-- 表的结构 `jyjl`
--

CREATE TABLE IF NOT EXISTS `jyjl` (
  `j_id` int(10) NOT NULL AUTO_INCREMENT,
  `j_name` varchar(30) NOT NULL,
  `j_num` varchar(10) NOT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `jyjl`
--

INSERT INTO `jyjl` (`j_id`, `j_name`, `j_num`) VALUES
(28, '奶昔', '2'),
(29, '肥牛', '2'),
(30, '肥牛', '2'),
(31, '肥牛', '2'),
(32, '猪蹄', '2');

-- --------------------------------------------------------

--
-- 表的结构 `lypl`
--

CREATE TABLE IF NOT EXISTS `lypl` (
  `l_id` int(10) NOT NULL AUTO_INCREMENT,
  `l_u_id` int(10) DEFAULT NULL,
  `zt` varchar(20) NOT NULL,
  `pj` varchar(1024) NOT NULL,
  `fbsj` date NOT NULL,
  PRIMARY KEY (`l_id`),
  KEY `lypl` (`l_u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ppjs`
--

CREATE TABLE IF NOT EXISTS `ppjs` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_wen` varchar(1024) NOT NULL,
  `p_pic` varchar(1024) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `ppjs`
--

INSERT INTO `ppjs` (`p_id`, `p_wen`, `p_pic`) VALUES
(5, '片古老的森林，一个神奇的民族，一群美丽的少女，流传一种独特的火锅饮食文化……这就是傣妹火锅!以其极具傣 族风情的设计，独特的口味，优质的服务，低廉的价格和优雅的环境成为餐饮业中一道亮丽的风景线。已在全国各大城市成功发展直营连锁分店200余家，正以较快的速度发展，追求时尚、顺应市场！与您在全国城市的旅行相伴同行!', './'),
(6, '傣妹火锅是当前火锅餐饮业中营业面积最大，接待顾客最多的火锅餐饮连锁企业，品牌铸造、十年辉煌，我们的努力使广大消费者成为傣妹忠实的顾客，吃火锅到傣妹，这句话正在广大消费者中悄然流行……', './'),
(7, '我公司本着不断自我创新，永做同行先锋的经营理念，努力提高全国各连锁店的管理水平，服务意识和卫生质量为您服务，我们将用我们的礼貌,我们的热情,我们的周到,我们的微笑使您有宾至如归的享受!品傣妹火锅，赏傣族风情！源自傣族的经典口味，利用百余种优质天然中草香料和独特的神气配方使其具有麻、辣、鲜、香，回味悠长的特点，另外我们还运用食补和外薰的中医理念达到美容健身的功效。大众化的消费，高档的享受，经典的火锅源自傣族，正宗的火锅在傣妹!傣妹火锅在感谢各忠实顾客朋友之余，将继续拼搏进取，用十分的热情、十分周到的服务换您一份满意！', './');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_g_id` int(10) DEFAULT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_pass` varchar(30) NOT NULL,
  `u_sex` varchar(10) NOT NULL,
  `u_pnumber` varchar(20) NOT NULL,
  `u_address` varchar(80) NOT NULL,
  PRIMARY KEY (`u_id`),
  KEY `tb_user` (`u_g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`u_id`, `u_g_id`, `u_name`, `u_pass`, `u_sex`, `u_pnumber`, `u_address`) VALUES
(15, NULL, '2345', '3525', '男', '23536', '23534646'),
(16, NULL, 'fvdvf', '1234545', '男', '335454546565657567', '34354545'),
(18, NULL, '2435', '34552342', '男', '12345678901', 'qwwrree'),
(19, NULL, '2343534', '3545545', '男', '2342343333', '234435'),
(20, NULL, '2342', '2344343', '男', '1232434', '345345464566'),
(21, NULL, 'ed', '343cdc', '女', '232435345', 'efwvdfv'),
(22, NULL, '123', '123456', '男', '12312', '1244444444'),
(23, NULL, 'lxy', '123456', '女', '2342535', '江南小镇'),
(24, NULL, 'ly', '12748545', '女', '12352532', '湘潭');

--
-- 限制导出的表
--

--
-- 限制表 `con_drink`
--
ALTER TABLE `con_drink`
  ADD CONSTRAINT `con_drink` FOREIGN KEY (`d_g_id`) REFERENCES `gly` (`g_id`);

--
-- 限制表 `con_meat`
--
ALTER TABLE `con_meat`
  ADD CONSTRAINT `con_meat` FOREIGN KEY (`m_g_id`) REFERENCES `gly` (`g_id`);

--
-- 限制表 `con_special`
--
ALTER TABLE `con_special`
  ADD CONSTRAINT `con_special` FOREIGN KEY (`s_g_id`) REFERENCES `gly` (`g_id`);

--
-- 限制表 `con_vegetable`
--
ALTER TABLE `con_vegetable`
  ADD CONSTRAINT `con_vegetable` FOREIGN KEY (`v_g_id`) REFERENCES `gly` (`g_id`);

--
-- 限制表 `lypl`
--
ALTER TABLE `lypl`
  ADD CONSTRAINT `lypl` FOREIGN KEY (`l_u_id`) REFERENCES `tb_user` (`u_id`);

--
-- 限制表 `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user` FOREIGN KEY (`u_g_id`) REFERENCES `gly` (`g_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
