-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 06 月 30 日 19:52
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `chenyetao`
--
CREATE DATABASE IF NOT EXISTS `student` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `student`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `create_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adminId`),
  UNIQUE KEY `adminName` (`adminName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`adminName`, `password`, `adminId`, `create_at`) VALUES
('ttfq', '21232f297a57a5a743894a0e4a801fc3', 8, 1498359312),
('admin', '21232f297a57a5a743894a0e4a801fc3', 9, 1498359337),
('root', '63a9f0ea7bb98050796b649e85481845', 10, 1498359423);

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8 NOT NULL,
  `desc` varchar(300) CHARACTER SET utf8 NOT NULL,
  `is_top` tinyint(1) NOT NULL DEFAULT '0',
  `is_publish` tinyint(1) NOT NULL DEFAULT '0',
  `content` text CHARACTER SET utf8 NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=636 ;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `cate_id`, `user_id`, `title`, `desc`, `is_top`, `is_publish`, `content`, `view_count`, `created_at`, `updated_at`) VALUES
(15, 7, 13, '「新功能发布」简洁大方的社区功能上线', 'jhk', 0, 0, '咱们这简洁大方的社区功能上线了，让大家久等了。这下，大家在闲的时候我们来这里交流一下互动一下。了解一下其它网友使用TomatoWork也是极好的哇。\r\n\r\n现在来做个自我介绍哈：\r\n\r\n功能日记及番茄百科是管理员模块，用户不能发贴；有什么新添加的功能、新优化的项目我们会在这里分布出来，就像这篇帖子一样。番茄百科会详细介绍一下番茄工作法，各位没事可来这里逛逛。\r\n\r\n新手上路是每个新手必来的地方，建议很篇帖子都应该读一下。这可是TomatoWork幸幸苦苦写的。\r\n\r\n使用技巧可是个宝藏啊，虽然内容不多。介绍了一些怎么高效使用TomatoWork的技巧。\r\n\r\n意见建议自然不用说，各位不用客气，有什么建议意见甚至什么不合适的功能，都可以提出来。我们会一个个的解决掉。\r\n\r\n许愿清单是指大家想要什么功能，可以提出来，我们会考虑在后续工作中添加进来，让TomatoWork满足大多数人的需求。不过我们立足于时间管理，与此无关的需求建议还是不要提了，我们不想到成大而全的网站。只想安安静静的在这里给大家管理时间、监督大家使用好时间。', 2, 1498562813, 1498562813),
(17, 9, 13, '为什么把六月一日定为儿童节', 'jhk', 0, 0, '儿童节是孩童们最高兴的日子，因为这一天父母会买好吃的给他们，还会带他们去游乐园玩耍，在上学的孩子们这一天也会放假，可以说老师们都沾了孩子们的光，老师这一天也会放假，那么这个儿童节为什么会定在每一年的六月一日这天呢？各个国家的儿童节都是什么时候呢？\r\n\r\n    儿童节，也叫六一国际儿童节，是少年儿童的节日，1949年11月，国际民主妇女联合会，在莫斯科举行理事会议，中国和各国代表愤怒地揭露了帝国主义分子和各国反动派残杀、毒害儿童的罪行。为悼念1942年利迪策惨案和全世界战争中死难的儿童，反对虐杀和毒害儿童，保障儿童权利而设立。为了保障世界各国儿童的生存权、保健权和受教育权，为了改善儿童的生活，会议决定以每年的6月1日为国际儿童节日。\r\n\r\n    在此之前，世界上很多国家原本就有儿童节，但各个国家的儿童节时间不一样，比如：韩国儿童节：5月5日，英国儿童节：7月14日，新加坡儿童节：10月1日，当时中国的儿童节是4月4日，自从1949年确立6月1日为国际儿童节以后，世界各国纷纷改掉了原来的儿童节日期，并统一改为"六一国际儿童节"。中国中央人民政府也在1949年12月宣布：将原来的4月1日儿童节改为6月1日儿童节"，并规定在这一天全中国的少年儿童都放假一天。所以新中国第一个儿童节就从1950年6月1日开始了。所以2017年的儿童节是我们国家的第67次儿童节。在此也祝愿所有的少年儿童们健康快乐的成长！', 2, 1498562999, 1498562999),
(21, 9, 14, '高楼失火该往哪里跑？', 'jhk', 0, 0, '高楼失火该往上还是往下跑呢？\r\n想必有很大一部分人在高楼生活或工作吧，如果你处在高楼上，突然失火了怎么办呢？\r\n          你是往下跑还是往上跑哦？\r\n    废话不多说\r\n    专家建议：首先迅速的找到消防通道，向楼下跑，千万别坐电梯跑，更不能往楼上跑。', 2, 1498563488, 1498563488),
(25, 7, 1, '为什么子弹在飞行时旋转？', 'jhk', 0, 0, '旋转的时候能赋予子弹沿弹道飞行时所需的稳定性。为了让子弹旋转，在枪膛内壁有一个螺旋形的槽，这样子弹射出后就像陀螺仪那样围绕自身的轴均匀旋转。', 2, 1498563913, 1498563913),
(31, 10, 13, '为什么把一件物品叫东西？', 'jhk', 0, 0, '有人说在东汉时期，东京(洛阳) 和 西京(长安)  是积聚天下宝贝的地方，人们要去洛阳和长安购置物品，所以就叫「买东」和「买西」，后来买货物就合称为：买东西了。\r\n \r\n    据说：（东和西 是 金和木）-（南和北 是 水和火）水火是不可以装入篮子里的，而金木都可以装入篮子里，所以装入篮子里的物品自然是（东西）而不是南北。所以流传到至今，大家就称之为买东西了，而不是买南北。', 2, 1498563077, 1498563077),
(39, 9, 1, '世界上拥有航母最多的国家是？', 'jhk', 0, 0, '毫无疑问，世界上拥有航母最多的国家是美国，美国是也是世界上最早拥有航母的国家之一。\r\n目前大概在12艘左右 均为尼米兹级航母，最大的为11万吨级左右。\r\n中国的瓦良格号航母：标准排水量：4.7万吨级     满载的话： 6万吨 ，属于中型航母\r\n\r\n航母数量排名：\r\n美国：12\r\n英国：3\r\n意大利：3\r\n印度：3\r\n中国：1\r\n法国：1\r\n俄罗斯：1\r\n西班牙：1\r\n巴西：1\r\n泰国：1\r\n日本：1\r\n韩国：1\r\n阿根廷：1', 2, 1498563959, 1498563959),
(48, 7, 14, '为什么拍照时喜欢比出剪刀？', 'jhk', 0, 0, '很多时候你只要看这个人拍照的手势，就知道他是什么年代的人了，00后拍照爱嘟嘴，90后拍照都是爱捧着脸瞪眼睛，而拍照就不自觉剪刀手的是80后，当然这些手势你可能全都有，恭喜你，你一直都追随着时尚潮流的步伐，剪刀手就是手指握住伸出食指和中指，也叫"V”字手势。很多场合下只要拍照，都会看得见这个手势，剪刀手可谓是老少皆知啊。就像十万个为什么网站一样，谁都知道十万个为什么这个词，有空常来访问本网站哦，呵呵。', 2, 1498563368, 1498563368),
(525, 6, 13, '「工作总结」第一步：工作总结', 'jhk', 0, 0, '点击导航栏上的"统计"链接，可进入到统计页面，这里主要统计了每天了的番茄钟完成情况。\r\n\r\n估计番茄钟总数是指应该完成的事项所估的番茄钟总数。\r\n\r\n实际完成番茄钟总数是实际完成的番茄钟总数。\r\n\r\n任务完成数是指完成的任务数(事项数)。\r\n\r\n内部中断数是指工作时所记录的内部中断数。\r\n\r\n外部中断数是指工作时所记录的外部中断数。\r\n\r\n计划外紧急数是指事项设置为计划外的总数。\r\n\r\n番茄中止数是指番茄钟被中止的总数。\r\n\r\n事项废弃数是指事项被废弃(删除)的总数。\r\n\r\n二次评估数是指番茄钟完成时工作未完成需要第二评估番茄钟的事项总数。\r\n\r\n三次评估数是指番茄钟完成时工作未完成需要第三评估番茄钟的事项总数。', 0, 1498822973, 1498822973),
(526, 6, 13, '「开始工作」第二步：添加到"今日待办"', 'jhk', 0, 0, '相信大家已经在"待办事项"列表里添加了自己近期要完成的事项(工作)了，接下来就是要选择一些今天需要完成的事项拖动"今日待办"里。注意，这个拖动操作就相单于对自己的承诺：今天一定要完成它。\r\n\r\n完成上述的拖动操作后，刚才添加的"待办事项就移动到""今日待办"列表里了。如果此时还没事项正在计时，那么每个"今日待办"事项都有一个蓝色的"开始"按钮，点击某个即可开始该事项(计时)，并跳转到计时页面。\r\n\r\n在计时页面我们可以看到一个倒计时和一个进度条，这些都在暗示着时间的流逝。页面底部还有一个"工作记录"表单，在工作中遇到有什么需要速记的，可以直接写在下面并"保存"。\r\n\r\n在计时页面点击导航栏上的"工作台"链接，可以回到列表页(此时会跳出一个是否离开计时页面的确认框)。"今日待办"列表里正在进行(计时)的事项，状态会显示为"进行中"；其它事项的"开始"按钮变为白色且为不可点击状态。就是说在某一事项完成之前是不可以开始另一件工作的。', 1, 1498823023, 1498823023),
(527, 7, 13, '「新功能发布」简洁大方的社区功能上线', 'jhk', 0, 0, '咱们这简洁大方的社区功能上线了，让大家久等了。这下，大家在闲的时候我们来这里交流一下互动一下。了解一下其它网友使用TomatoWork也是极好的哇。\r\n\r\n现在来做个自我介绍哈：\r\n\r\n功能日记及番茄百科是管理员模块，用户不能发贴；有什么新添加的功能、新优化的项目我们会在这里分布出来，就像这篇帖子一样。番茄百科会详细介绍一下番茄工作法，各位没事可来这里逛逛。\r\n\r\n新手上路是每个新手必来的地方，建议很篇帖子都应该读一下。这可是TomatoWork幸幸苦苦写的。\r\n\r\n使用技巧可是个宝藏啊，虽然内容不多。介绍了一些怎么高效使用TomatoWork的技巧。\r\n\r\n意见建议自然不用说，各位不用客气，有什么建议意见甚至什么不合适的功能，都可以提出来。我们会一个个的解决掉。\r\n\r\n许愿清单是指大家想要什么功能，可以提出来，我们会考虑在后续工作中添加进来，让TomatoWork满足大多数人的需求。不过我们立足于时间管理，与此无关的需求建议还是不要提了，我们不想到成大而全的网站。只想安安静静的在这里给大家管理时间、监督大家使用好时间。', 2, 1498562813, 1498562813),
(528, 9, 13, '为什么把六月一日定为儿童节', 'jhk', 0, 0, '儿童节是孩童们最高兴的日子，因为这一天父母会买好吃的给他们，还会带他们去游乐园玩耍，在上学的孩子们这一天也会放假，可以说老师们都沾了孩子们的光，老师这一天也会放假，那么这个儿童节为什么会定在每一年的六月一日这天呢？各个国家的儿童节都是什么时候呢？\r\n\r\n    儿童节，也叫六一国际儿童节，是少年儿童的节日，1949年11月，国际民主妇女联合会，在莫斯科举行理事会议，中国和各国代表愤怒地揭露了帝国主义分子和各国反动派残杀、毒害儿童的罪行。为悼念1942年利迪策惨案和全世界战争中死难的儿童，反对虐杀和毒害儿童，保障儿童权利而设立。为了保障世界各国儿童的生存权、保健权和受教育权，为了改善儿童的生活，会议决定以每年的6月1日为国际儿童节日。\r\n\r\n    在此之前，世界上很多国家原本就有儿童节，但各个国家的儿童节时间不一样，比如：韩国儿童节：5月5日，英国儿童节：7月14日，新加坡儿童节：10月1日，当时中国的儿童节是4月4日，自从1949年确立6月1日为国际儿童节以后，世界各国纷纷改掉了原来的儿童节日期，并统一改为"六一国际儿童节"。中国中央人民政府也在1949年12月宣布：将原来的4月1日儿童节改为6月1日儿童节"，并规定在这一天全中国的少年儿童都放假一天。所以新中国第一个儿童节就从1950年6月1日开始了。所以2017年的儿童节是我们国家的第67次儿童节。在此也祝愿所有的少年儿童们健康快乐的成长！', 2, 1498562999, 1498562999),
(529, 9, 14, '高楼失火该往哪里跑？', 'jhk', 0, 0, '高楼失火该往上还是往下跑呢？\r\n想必有很大一部分人在高楼生活或工作吧，如果你处在高楼上，突然失火了怎么办呢？\r\n          你是往下跑还是往上跑哦？\r\n    废话不多说\r\n    专家建议：首先迅速的找到消防通道，向楼下跑，千万别坐电梯跑，更不能往楼上跑。', 2, 1498563488, 1498563488),
(530, 7, 1, '为什么子弹在飞行时旋转？', 'jhk', 0, 0, '旋转的时候能赋予子弹沿弹道飞行时所需的稳定性。为了让子弹旋转，在枪膛内壁有一个螺旋形的槽，这样子弹射出后就像陀螺仪那样围绕自身的轴均匀旋转。', 2, 1498563913, 1498563913),
(531, 10, 13, '为什么把一件物品叫东西？', 'jhk', 0, 0, '有人说在东汉时期，东京(洛阳) 和 西京(长安)  是积聚天下宝贝的地方，人们要去洛阳和长安购置物品，所以就叫「买东」和「买西」，后来买货物就合称为：买东西了。\r\n \r\n    据说：（东和西 是 金和木）-（南和北 是 水和火）水火是不可以装入篮子里的，而金木都可以装入篮子里，所以装入篮子里的物品自然是（东西）而不是南北。所以流传到至今，大家就称之为买东西了，而不是买南北。', 2, 1498563077, 1498563077),
(532, 9, 1, '世界上拥有航母最多的国家是？', 'jhk', 0, 0, '毫无疑问，世界上拥有航母最多的国家是美国，美国是也是世界上最早拥有航母的国家之一。\r\n目前大概在12艘左右 均为尼米兹级航母，最大的为11万吨级左右。\r\n中国的瓦良格号航母：标准排水量：4.7万吨级     满载的话： 6万吨 ，属于中型航母\r\n\r\n航母数量排名：\r\n美国：12\r\n英国：3\r\n意大利：3\r\n印度：3\r\n中国：1\r\n法国：1\r\n俄罗斯：1\r\n西班牙：1\r\n巴西：1\r\n泰国：1\r\n日本：1\r\n韩国：1\r\n阿根廷：1', 2, 1498563959, 1498563959),
(533, 7, 14, '为什么拍照时喜欢比出剪刀？', 'jhk', 0, 0, '很多时候你只要看这个人拍照的手势，就知道他是什么年代的人了，00后拍照爱嘟嘴，90后拍照都是爱捧着脸瞪眼睛，而拍照就不自觉剪刀手的是80后，当然这些手势你可能全都有，恭喜你，你一直都追随着时尚潮流的步伐，剪刀手就是手指握住伸出食指和中指，也叫"V”字手势。很多场合下只要拍照，都会看得见这个手势，剪刀手可谓是老少皆知啊。就像十万个为什么网站一样，谁都知道十万个为什么这个词，有空常来访问本网站哦，呵呵。', 2, 1498563368, 1498563368),
(534, 6, 13, '「工作总结」第一步：工作总结', 'jhk', 0, 0, '点击导航栏上的"统计"链接，可进入到统计页面，这里主要统计了每天了的番茄钟完成情况。\r\n\r\n估计番茄钟总数是指应该完成的事项所估的番茄钟总数。\r\n\r\n实际完成番茄钟总数是实际完成的番茄钟总数。\r\n\r\n任务完成数是指完成的任务数(事项数)。\r\n\r\n内部中断数是指工作时所记录的内部中断数。\r\n\r\n外部中断数是指工作时所记录的外部中断数。\r\n\r\n计划外紧急数是指事项设置为计划外的总数。\r\n\r\n番茄中止数是指番茄钟被中止的总数。\r\n\r\n事项废弃数是指事项被废弃(删除)的总数。\r\n\r\n二次评估数是指番茄钟完成时工作未完成需要第二评估番茄钟的事项总数。\r\n\r\n三次评估数是指番茄钟完成时工作未完成需要第三评估番茄钟的事项总数。', 0, 1498822973, 1498822973),
(535, 6, 13, '「开始工作」第二步：添加到"今日待办"', 'jhk', 0, 0, '相信大家已经在"待办事项"列表里添加了自己近期要完成的事项(工作)了，接下来就是要选择一些今天需要完成的事项拖动"今日待办"里。注意，这个拖动操作就相单于对自己的承诺：今天一定要完成它。\r\n\r\n完成上述的拖动操作后，刚才添加的"待办事项就移动到""今日待办"列表里了。如果此时还没事项正在计时，那么每个"今日待办"事项都有一个蓝色的"开始"按钮，点击某个即可开始该事项(计时)，并跳转到计时页面。\r\n\r\n在计时页面我们可以看到一个倒计时和一个进度条，这些都在暗示着时间的流逝。页面底部还有一个"工作记录"表单，在工作中遇到有什么需要速记的，可以直接写在下面并"保存"。\r\n\r\n在计时页面点击导航栏上的"工作台"链接，可以回到列表页(此时会跳出一个是否离开计时页面的确认框)。"今日待办"列表里正在进行(计时)的事项，状态会显示为"进行中"；其它事项的"开始"按钮变为白色且为不可点击状态。就是说在某一事项完成之前是不可以开始另一件工作的。', 1, 1498823023, 1498823023),
(542, 7, 13, '「新功能发布」简洁大方的社区功能上线', 'jhk', 0, 0, '咱们这简洁大方的社区功能上线了，让大家久等了。这下，大家在闲的时候我们来这里交流一下互动一下。了解一下其它网友使用TomatoWork也是极好的哇。\r\n\r\n现在来做个自我介绍哈：\r\n\r\n功能日记及番茄百科是管理员模块，用户不能发贴；有什么新添加的功能、新优化的项目我们会在这里分布出来，就像这篇帖子一样。番茄百科会详细介绍一下番茄工作法，各位没事可来这里逛逛。\r\n\r\n新手上路是每个新手必来的地方，建议很篇帖子都应该读一下。这可是TomatoWork幸幸苦苦写的。\r\n\r\n使用技巧可是个宝藏啊，虽然内容不多。介绍了一些怎么高效使用TomatoWork的技巧。\r\n\r\n意见建议自然不用说，各位不用客气，有什么建议意见甚至什么不合适的功能，都可以提出来。我们会一个个的解决掉。\r\n\r\n许愿清单是指大家想要什么功能，可以提出来，我们会考虑在后续工作中添加进来，让TomatoWork满足大多数人的需求。不过我们立足于时间管理，与此无关的需求建议还是不要提了，我们不想到成大而全的网站。只想安安静静的在这里给大家管理时间、监督大家使用好时间。', 2, 1498562813, 1498562813),
(543, 9, 13, '为什么把六月一日定为儿童节', 'jhk', 0, 0, '儿童节是孩童们最高兴的日子，因为这一天父母会买好吃的给他们，还会带他们去游乐园玩耍，在上学的孩子们这一天也会放假，可以说老师们都沾了孩子们的光，老师这一天也会放假，那么这个儿童节为什么会定在每一年的六月一日这天呢？各个国家的儿童节都是什么时候呢？\r\n\r\n    儿童节，也叫六一国际儿童节，是少年儿童的节日，1949年11月，国际民主妇女联合会，在莫斯科举行理事会议，中国和各国代表愤怒地揭露了帝国主义分子和各国反动派残杀、毒害儿童的罪行。为悼念1942年利迪策惨案和全世界战争中死难的儿童，反对虐杀和毒害儿童，保障儿童权利而设立。为了保障世界各国儿童的生存权、保健权和受教育权，为了改善儿童的生活，会议决定以每年的6月1日为国际儿童节日。\r\n\r\n    在此之前，世界上很多国家原本就有儿童节，但各个国家的儿童节时间不一样，比如：韩国儿童节：5月5日，英国儿童节：7月14日，新加坡儿童节：10月1日，当时中国的儿童节是4月4日，自从1949年确立6月1日为国际儿童节以后，世界各国纷纷改掉了原来的儿童节日期，并统一改为"六一国际儿童节"。中国中央人民政府也在1949年12月宣布：将原来的4月1日儿童节改为6月1日儿童节"，并规定在这一天全中国的少年儿童都放假一天。所以新中国第一个儿童节就从1950年6月1日开始了。所以2017年的儿童节是我们国家的第67次儿童节。在此也祝愿所有的少年儿童们健康快乐的成长！', 2, 1498562999, 1498562999),
(544, 9, 14, '高楼失火该往哪里跑？', 'jhk', 0, 0, '高楼失火该往上还是往下跑呢？\r\n想必有很大一部分人在高楼生活或工作吧，如果你处在高楼上，突然失火了怎么办呢？\r\n          你是往下跑还是往上跑哦？\r\n    废话不多说\r\n    专家建议：首先迅速的找到消防通道，向楼下跑，千万别坐电梯跑，更不能往楼上跑。', 2, 1498563488, 1498563488),
(545, 7, 1, '为什么子弹在飞行时旋转？', 'jhk', 0, 0, '旋转的时候能赋予子弹沿弹道飞行时所需的稳定性。为了让子弹旋转，在枪膛内壁有一个螺旋形的槽，这样子弹射出后就像陀螺仪那样围绕自身的轴均匀旋转。', 2, 1498563913, 1498563913),
(546, 10, 13, '为什么把一件物品叫东西？', 'jhk', 0, 0, '有人说在东汉时期，东京(洛阳) 和 西京(长安)  是积聚天下宝贝的地方，人们要去洛阳和长安购置物品，所以就叫「买东」和「买西」，后来买货物就合称为：买东西了。\r\n \r\n    据说：（东和西 是 金和木）-（南和北 是 水和火）水火是不可以装入篮子里的，而金木都可以装入篮子里，所以装入篮子里的物品自然是（东西）而不是南北。所以流传到至今，大家就称之为买东西了，而不是买南北。', 2, 1498563077, 1498563077),
(547, 9, 1, '世界上拥有航母最多的国家是？', 'jhk', 0, 0, '毫无疑问，世界上拥有航母最多的国家是美国，美国是也是世界上最早拥有航母的国家之一。\r\n目前大概在12艘左右 均为尼米兹级航母，最大的为11万吨级左右。\r\n中国的瓦良格号航母：标准排水量：4.7万吨级     满载的话： 6万吨 ，属于中型航母\r\n\r\n航母数量排名：\r\n美国：12\r\n英国：3\r\n意大利：3\r\n印度：3\r\n中国：1\r\n法国：1\r\n俄罗斯：1\r\n西班牙：1\r\n巴西：1\r\n泰国：1\r\n日本：1\r\n韩国：1\r\n阿根廷：1', 2, 1498563959, 1498563959),
(548, 7, 14, '为什么拍照时喜欢比出剪刀？', 'jhk', 0, 0, '很多时候你只要看这个人拍照的手势，就知道他是什么年代的人了，00后拍照爱嘟嘴，90后拍照都是爱捧着脸瞪眼睛，而拍照就不自觉剪刀手的是80后，当然这些手势你可能全都有，恭喜你，你一直都追随着时尚潮流的步伐，剪刀手就是手指握住伸出食指和中指，也叫"V”字手势。很多场合下只要拍照，都会看得见这个手势，剪刀手可谓是老少皆知啊。就像十万个为什么网站一样，谁都知道十万个为什么这个词，有空常来访问本网站哦，呵呵。', 2, 1498563368, 1498563368),
(549, 6, 13, '「工作总结」第一步：工作总结', 'jhk', 0, 0, '点击导航栏上的"统计"链接，可进入到统计页面，这里主要统计了每天了的番茄钟完成情况。\r\n\r\n估计番茄钟总数是指应该完成的事项所估的番茄钟总数。\r\n\r\n实际完成番茄钟总数是实际完成的番茄钟总数。\r\n\r\n任务完成数是指完成的任务数(事项数)。\r\n\r\n内部中断数是指工作时所记录的内部中断数。\r\n\r\n外部中断数是指工作时所记录的外部中断数。\r\n\r\n计划外紧急数是指事项设置为计划外的总数。\r\n\r\n番茄中止数是指番茄钟被中止的总数。\r\n\r\n事项废弃数是指事项被废弃(删除)的总数。\r\n\r\n二次评估数是指番茄钟完成时工作未完成需要第二评估番茄钟的事项总数。\r\n\r\n三次评估数是指番茄钟完成时工作未完成需要第三评估番茄钟的事项总数。', 0, 1498822973, 1498822973),
(550, 6, 13, '「开始工作」第二步：添加到"今日待办"', 'jhk', 0, 0, '相信大家已经在"待办事项"列表里添加了自己近期要完成的事项(工作)了，接下来就是要选择一些今天需要完成的事项拖动"今日待办"里。注意，这个拖动操作就相单于对自己的承诺：今天一定要完成它。\r\n\r\n完成上述的拖动操作后，刚才添加的"待办事项就移动到""今日待办"列表里了。如果此时还没事项正在计时，那么每个"今日待办"事项都有一个蓝色的"开始"按钮，点击某个即可开始该事项(计时)，并跳转到计时页面。\r\n\r\n在计时页面我们可以看到一个倒计时和一个进度条，这些都在暗示着时间的流逝。页面底部还有一个"工作记录"表单，在工作中遇到有什么需要速记的，可以直接写在下面并"保存"。\r\n\r\n在计时页面点击导航栏上的"工作台"链接，可以回到列表页(此时会跳出一个是否离开计时页面的确认框)。"今日待办"列表里正在进行(计时)的事项，状态会显示为"进行中"；其它事项的"开始"按钮变为白色且为不可点击状态。就是说在某一事项完成之前是不可以开始另一件工作的。', 0, 1498823023, 1498823023),
(551, 7, 13, '「新功能发布」简洁大方的社区功能上线', 'jhk', 0, 0, '咱们这简洁大方的社区功能上线了，让大家久等了。这下，大家在闲的时候我们来这里交流一下互动一下。了解一下其它网友使用TomatoWork也是极好的哇。\r\n\r\n现在来做个自我介绍哈：\r\n\r\n功能日记及番茄百科是管理员模块，用户不能发贴；有什么新添加的功能、新优化的项目我们会在这里分布出来，就像这篇帖子一样。番茄百科会详细介绍一下番茄工作法，各位没事可来这里逛逛。\r\n\r\n新手上路是每个新手必来的地方，建议很篇帖子都应该读一下。这可是TomatoWork幸幸苦苦写的。\r\n\r\n使用技巧可是个宝藏啊，虽然内容不多。介绍了一些怎么高效使用TomatoWork的技巧。\r\n\r\n意见建议自然不用说，各位不用客气，有什么建议意见甚至什么不合适的功能，都可以提出来。我们会一个个的解决掉。\r\n\r\n许愿清单是指大家想要什么功能，可以提出来，我们会考虑在后续工作中添加进来，让TomatoWork满足大多数人的需求。不过我们立足于时间管理，与此无关的需求建议还是不要提了，我们不想到成大而全的网站。只想安安静静的在这里给大家管理时间、监督大家使用好时间。', 2, 1498562813, 1498562813),
(552, 9, 13, '为什么把六月一日定为儿童节', 'jhk', 0, 0, '儿童节是孩童们最高兴的日子，因为这一天父母会买好吃的给他们，还会带他们去游乐园玩耍，在上学的孩子们这一天也会放假，可以说老师们都沾了孩子们的光，老师这一天也会放假，那么这个儿童节为什么会定在每一年的六月一日这天呢？各个国家的儿童节都是什么时候呢？\r\n\r\n    儿童节，也叫六一国际儿童节，是少年儿童的节日，1949年11月，国际民主妇女联合会，在莫斯科举行理事会议，中国和各国代表愤怒地揭露了帝国主义分子和各国反动派残杀、毒害儿童的罪行。为悼念1942年利迪策惨案和全世界战争中死难的儿童，反对虐杀和毒害儿童，保障儿童权利而设立。为了保障世界各国儿童的生存权、保健权和受教育权，为了改善儿童的生活，会议决定以每年的6月1日为国际儿童节日。\r\n\r\n    在此之前，世界上很多国家原本就有儿童节，但各个国家的儿童节时间不一样，比如：韩国儿童节：5月5日，英国儿童节：7月14日，新加坡儿童节：10月1日，当时中国的儿童节是4月4日，自从1949年确立6月1日为国际儿童节以后，世界各国纷纷改掉了原来的儿童节日期，并统一改为"六一国际儿童节"。中国中央人民政府也在1949年12月宣布：将原来的4月1日儿童节改为6月1日儿童节"，并规定在这一天全中国的少年儿童都放假一天。所以新中国第一个儿童节就从1950年6月1日开始了。所以2017年的儿童节是我们国家的第67次儿童节。在此也祝愿所有的少年儿童们健康快乐的成长！', 2, 1498562999, 1498562999),
(553, 9, 14, '高楼失火该往哪里跑？', 'jhk', 0, 0, '高楼失火该往上还是往下跑呢？\r\n想必有很大一部分人在高楼生活或工作吧，如果你处在高楼上，突然失火了怎么办呢？\r\n          你是往下跑还是往上跑哦？\r\n    废话不多说\r\n    专家建议：首先迅速的找到消防通道，向楼下跑，千万别坐电梯跑，更不能往楼上跑。', 2, 1498563488, 1498563488),
(554, 7, 1, '为什么子弹在飞行时旋转？', 'jhk', 0, 0, '旋转的时候能赋予子弹沿弹道飞行时所需的稳定性。为了让子弹旋转，在枪膛内壁有一个螺旋形的槽，这样子弹射出后就像陀螺仪那样围绕自身的轴均匀旋转。', 2, 1498563913, 1498563913),
(555, 10, 13, '为什么把一件物品叫东西？', 'jhk', 0, 0, '有人说在东汉时期，东京(洛阳) 和 西京(长安)  是积聚天下宝贝的地方，人们要去洛阳和长安购置物品，所以就叫「买东」和「买西」，后来买货物就合称为：买东西了。\r\n \r\n    据说：（东和西 是 金和木）-（南和北 是 水和火）水火是不可以装入篮子里的，而金木都可以装入篮子里，所以装入篮子里的物品自然是（东西）而不是南北。所以流传到至今，大家就称之为买东西了，而不是买南北。', 2, 1498563077, 1498563077),
(556, 9, 1, '世界上拥有航母最多的国家是？', 'jhk', 0, 0, '毫无疑问，世界上拥有航母最多的国家是美国，美国是也是世界上最早拥有航母的国家之一。\r\n目前大概在12艘左右 均为尼米兹级航母，最大的为11万吨级左右。\r\n中国的瓦良格号航母：标准排水量：4.7万吨级     满载的话： 6万吨 ，属于中型航母\r\n\r\n航母数量排名：\r\n美国：12\r\n英国：3\r\n意大利：3\r\n印度：3\r\n中国：1\r\n法国：1\r\n俄罗斯：1\r\n西班牙：1\r\n巴西：1\r\n泰国：1\r\n日本：1\r\n韩国：1\r\n阿根廷：1', 2, 1498563959, 1498563959),
(557, 7, 14, '为什么拍照时喜欢比出剪刀？', 'jhk', 0, 0, '很多时候你只要看这个人拍照的手势，就知道他是什么年代的人了，00后拍照爱嘟嘴，90后拍照都是爱捧着脸瞪眼睛，而拍照就不自觉剪刀手的是80后，当然这些手势你可能全都有，恭喜你，你一直都追随着时尚潮流的步伐，剪刀手就是手指握住伸出食指和中指，也叫"V”字手势。很多场合下只要拍照，都会看得见这个手势，剪刀手可谓是老少皆知啊。就像十万个为什么网站一样，谁都知道十万个为什么这个词，有空常来访问本网站哦，呵呵。', 2, 1498563368, 1498563368),
(558, 6, 13, '「工作总结」第一步：工作总结', 'jhk', 0, 0, '点击导航栏上的"统计"链接，可进入到统计页面，这里主要统计了每天了的番茄钟完成情况。\r\n\r\n估计番茄钟总数是指应该完成的事项所估的番茄钟总数。\r\n\r\n实际完成番茄钟总数是实际完成的番茄钟总数。\r\n\r\n任务完成数是指完成的任务数(事项数)。\r\n\r\n内部中断数是指工作时所记录的内部中断数。\r\n\r\n外部中断数是指工作时所记录的外部中断数。\r\n\r\n计划外紧急数是指事项设置为计划外的总数。\r\n\r\n番茄中止数是指番茄钟被中止的总数。\r\n\r\n事项废弃数是指事项被废弃(删除)的总数。\r\n\r\n二次评估数是指番茄钟完成时工作未完成需要第二评估番茄钟的事项总数。\r\n\r\n三次评估数是指番茄钟完成时工作未完成需要第三评估番茄钟的事项总数。', 0, 1498822973, 1498822973),
(559, 6, 13, '「开始工作」第二步：添加到"今日待办"', 'jhk', 0, 0, '相信大家已经在"待办事项"列表里添加了自己近期要完成的事项(工作)了，接下来就是要选择一些今天需要完成的事项拖动"今日待办"里。注意，这个拖动操作就相单于对自己的承诺：今天一定要完成它。\r\n\r\n完成上述的拖动操作后，刚才添加的"待办事项就移动到""今日待办"列表里了。如果此时还没事项正在计时，那么每个"今日待办"事项都有一个蓝色的"开始"按钮，点击某个即可开始该事项(计时)，并跳转到计时页面。\r\n\r\n在计时页面我们可以看到一个倒计时和一个进度条，这些都在暗示着时间的流逝。页面底部还有一个"工作记录"表单，在工作中遇到有什么需要速记的，可以直接写在下面并"保存"。\r\n\r\n在计时页面点击导航栏上的"工作台"链接，可以回到列表页(此时会跳出一个是否离开计时页面的确认框)。"今日待办"列表里正在进行(计时)的事项，状态会显示为"进行中"；其它事项的"开始"按钮变为白色且为不可点击状态。就是说在某一事项完成之前是不可以开始另一件工作的。', 1, 1498823023, 1498823023),
(573, 7, 13, '「新功能发布」简洁大方的社区功能上线', 'jhk', 0, 0, '咱们这简洁大方的社区功能上线了，让大家久等了。这下，大家在闲的时候我们来这里交流一下互动一下。了解一下其它网友使用TomatoWork也是极好的哇。\r\n\r\n现在来做个自我介绍哈：\r\n\r\n功能日记及番茄百科是管理员模块，用户不能发贴；有什么新添加的功能、新优化的项目我们会在这里分布出来，就像这篇帖子一样。番茄百科会详细介绍一下番茄工作法，各位没事可来这里逛逛。\r\n\r\n新手上路是每个新手必来的地方，建议很篇帖子都应该读一下。这可是TomatoWork幸幸苦苦写的。\r\n\r\n使用技巧可是个宝藏啊，虽然内容不多。介绍了一些怎么高效使用TomatoWork的技巧。\r\n\r\n意见建议自然不用说，各位不用客气，有什么建议意见甚至什么不合适的功能，都可以提出来。我们会一个个的解决掉。\r\n\r\n许愿清单是指大家想要什么功能，可以提出来，我们会考虑在后续工作中添加进来，让TomatoWork满足大多数人的需求。不过我们立足于时间管理，与此无关的需求建议还是不要提了，我们不想到成大而全的网站。只想安安静静的在这里给大家管理时间、监督大家使用好时间。', 2, 1498562813, 1498562813),
(574, 9, 13, '为什么把六月一日定为儿童节', 'jhk', 0, 0, '儿童节是孩童们最高兴的日子，因为这一天父母会买好吃的给他们，还会带他们去游乐园玩耍，在上学的孩子们这一天也会放假，可以说老师们都沾了孩子们的光，老师这一天也会放假，那么这个儿童节为什么会定在每一年的六月一日这天呢？各个国家的儿童节都是什么时候呢？\r\n\r\n    儿童节，也叫六一国际儿童节，是少年儿童的节日，1949年11月，国际民主妇女联合会，在莫斯科举行理事会议，中国和各国代表愤怒地揭露了帝国主义分子和各国反动派残杀、毒害儿童的罪行。为悼念1942年利迪策惨案和全世界战争中死难的儿童，反对虐杀和毒害儿童，保障儿童权利而设立。为了保障世界各国儿童的生存权、保健权和受教育权，为了改善儿童的生活，会议决定以每年的6月1日为国际儿童节日。\r\n\r\n    在此之前，世界上很多国家原本就有儿童节，但各个国家的儿童节时间不一样，比如：韩国儿童节：5月5日，英国儿童节：7月14日，新加坡儿童节：10月1日，当时中国的儿童节是4月4日，自从1949年确立6月1日为国际儿童节以后，世界各国纷纷改掉了原来的儿童节日期，并统一改为"六一国际儿童节"。中国中央人民政府也在1949年12月宣布：将原来的4月1日儿童节改为6月1日儿童节"，并规定在这一天全中国的少年儿童都放假一天。所以新中国第一个儿童节就从1950年6月1日开始了。所以2017年的儿童节是我们国家的第67次儿童节。在此也祝愿所有的少年儿童们健康快乐的成长！', 2, 1498562999, 1498562999),
(575, 9, 14, '高楼失火该往哪里跑？', 'jhk', 0, 0, '高楼失火该往上还是往下跑呢？\r\n想必有很大一部分人在高楼生活或工作吧，如果你处在高楼上，突然失火了怎么办呢？\r\n          你是往下跑还是往上跑哦？\r\n    废话不多说\r\n    专家建议：首先迅速的找到消防通道，向楼下跑，千万别坐电梯跑，更不能往楼上跑。', 2, 1498563488, 1498563488),
(576, 7, 1, '为什么子弹在飞行时旋转？', 'jhk', 0, 0, '旋转的时候能赋予子弹沿弹道飞行时所需的稳定性。为了让子弹旋转，在枪膛内壁有一个螺旋形的槽，这样子弹射出后就像陀螺仪那样围绕自身的轴均匀旋转。', 2, 1498563913, 1498563913),
(577, 10, 13, '为什么把一件物品叫东西？', 'jhk', 0, 0, '有人说在东汉时期，东京(洛阳) 和 西京(长安)  是积聚天下宝贝的地方，人们要去洛阳和长安购置物品，所以就叫「买东」和「买西」，后来买货物就合称为：买东西了。\r\n \r\n    据说：（东和西 是 金和木）-（南和北 是 水和火）水火是不可以装入篮子里的，而金木都可以装入篮子里，所以装入篮子里的物品自然是（东西）而不是南北。所以流传到至今，大家就称之为买东西了，而不是买南北。', 2, 1498563077, 1498563077),
(578, 9, 1, '世界上拥有航母最多的国家是？', 'jhk', 0, 0, '毫无疑问，世界上拥有航母最多的国家是美国，美国是也是世界上最早拥有航母的国家之一。\r\n目前大概在12艘左右 均为尼米兹级航母，最大的为11万吨级左右。\r\n中国的瓦良格号航母：标准排水量：4.7万吨级     满载的话： 6万吨 ，属于中型航母\r\n\r\n航母数量排名：\r\n美国：12\r\n英国：3\r\n意大利：3\r\n印度：3\r\n中国：1\r\n法国：1\r\n俄罗斯：1\r\n西班牙：1\r\n巴西：1\r\n泰国：1\r\n日本：1\r\n韩国：1\r\n阿根廷：1', 2, 1498563959, 1498563959),
(579, 7, 14, '为什么拍照时喜欢比出剪刀？', 'jhk', 0, 0, '很多时候你只要看这个人拍照的手势，就知道他是什么年代的人了，00后拍照爱嘟嘴，90后拍照都是爱捧着脸瞪眼睛，而拍照就不自觉剪刀手的是80后，当然这些手势你可能全都有，恭喜你，你一直都追随着时尚潮流的步伐，剪刀手就是手指握住伸出食指和中指，也叫"V”字手势。很多场合下只要拍照，都会看得见这个手势，剪刀手可谓是老少皆知啊。就像十万个为什么网站一样，谁都知道十万个为什么这个词，有空常来访问本网站哦，呵呵。', 2, 1498563368, 1498563368),
(580, 6, 13, '「工作总结」第一步：工作总结', 'jhk', 0, 0, '点击导航栏上的"统计"链接，可进入到统计页面，这里主要统计了每天了的番茄钟完成情况。\r\n\r\n估计番茄钟总数是指应该完成的事项所估的番茄钟总数。\r\n\r\n实际完成番茄钟总数是实际完成的番茄钟总数。\r\n\r\n任务完成数是指完成的任务数(事项数)。\r\n\r\n内部中断数是指工作时所记录的内部中断数。\r\n\r\n外部中断数是指工作时所记录的外部中断数。\r\n\r\n计划外紧急数是指事项设置为计划外的总数。\r\n\r\n番茄中止数是指番茄钟被中止的总数。\r\n\r\n事项废弃数是指事项被废弃(删除)的总数。\r\n\r\n二次评估数是指番茄钟完成时工作未完成需要第二评估番茄钟的事项总数。\r\n\r\n三次评估数是指番茄钟完成时工作未完成需要第三评估番茄钟的事项总数。', 0, 1498822973, 1498822973),
(581, 6, 13, '「开始工作」第二步：添加到"今日待办"', 'jhk', 0, 0, '相信大家已经在"待办事项"列表里添加了自己近期要完成的事项(工作)了，接下来就是要选择一些今天需要完成的事项拖动"今日待办"里。注意，这个拖动操作就相单于对自己的承诺：今天一定要完成它。\r\n\r\n完成上述的拖动操作后，刚才添加的"待办事项就移动到""今日待办"列表里了。如果此时还没事项正在计时，那么每个"今日待办"事项都有一个蓝色的"开始"按钮，点击某个即可开始该事项(计时)，并跳转到计时页面。\r\n\r\n在计时页面我们可以看到一个倒计时和一个进度条，这些都在暗示着时间的流逝。页面底部还有一个"工作记录"表单，在工作中遇到有什么需要速记的，可以直接写在下面并"保存"。\r\n\r\n在计时页面点击导航栏上的"工作台"链接，可以回到列表页(此时会跳出一个是否离开计时页面的确认框)。"今日待办"列表里正在进行(计时)的事项，状态会显示为"进行中"；其它事项的"开始"按钮变为白色且为不可点击状态。就是说在某一事项完成之前是不可以开始另一件工作的。', 0, 1498823023, 1498823023),
(582, 7, 13, '「新功能发布」简洁大方的社区功能上线', 'jhk', 0, 0, '咱们这简洁大方的社区功能上线了，让大家久等了。这下，大家在闲的时候我们来这里交流一下互动一下。了解一下其它网友使用TomatoWork也是极好的哇。\r\n\r\n现在来做个自我介绍哈：\r\n\r\n功能日记及番茄百科是管理员模块，用户不能发贴；有什么新添加的功能、新优化的项目我们会在这里分布出来，就像这篇帖子一样。番茄百科会详细介绍一下番茄工作法，各位没事可来这里逛逛。\r\n\r\n新手上路是每个新手必来的地方，建议很篇帖子都应该读一下。这可是TomatoWork幸幸苦苦写的。\r\n\r\n使用技巧可是个宝藏啊，虽然内容不多。介绍了一些怎么高效使用TomatoWork的技巧。\r\n\r\n意见建议自然不用说，各位不用客气，有什么建议意见甚至什么不合适的功能，都可以提出来。我们会一个个的解决掉。\r\n\r\n许愿清单是指大家想要什么功能，可以提出来，我们会考虑在后续工作中添加进来，让TomatoWork满足大多数人的需求。不过我们立足于时间管理，与此无关的需求建议还是不要提了，我们不想到成大而全的网站。只想安安静静的在这里给大家管理时间、监督大家使用好时间。', 2, 1498562813, 1498562813),
(583, 9, 13, '为什么把六月一日定为儿童节', 'jhk', 0, 0, '儿童节是孩童们最高兴的日子，因为这一天父母会买好吃的给他们，还会带他们去游乐园玩耍，在上学的孩子们这一天也会放假，可以说老师们都沾了孩子们的光，老师这一天也会放假，那么这个儿童节为什么会定在每一年的六月一日这天呢？各个国家的儿童节都是什么时候呢？\r\n\r\n    儿童节，也叫六一国际儿童节，是少年儿童的节日，1949年11月，国际民主妇女联合会，在莫斯科举行理事会议，中国和各国代表愤怒地揭露了帝国主义分子和各国反动派残杀、毒害儿童的罪行。为悼念1942年利迪策惨案和全世界战争中死难的儿童，反对虐杀和毒害儿童，保障儿童权利而设立。为了保障世界各国儿童的生存权、保健权和受教育权，为了改善儿童的生活，会议决定以每年的6月1日为国际儿童节日。\r\n\r\n    在此之前，世界上很多国家原本就有儿童节，但各个国家的儿童节时间不一样，比如：韩国儿童节：5月5日，英国儿童节：7月14日，新加坡儿童节：10月1日，当时中国的儿童节是4月4日，自从1949年确立6月1日为国际儿童节以后，世界各国纷纷改掉了原来的儿童节日期，并统一改为"六一国际儿童节"。中国中央人民政府也在1949年12月宣布：将原来的4月1日儿童节改为6月1日儿童节"，并规定在这一天全中国的少年儿童都放假一天。所以新中国第一个儿童节就从1950年6月1日开始了。所以2017年的儿童节是我们国家的第67次儿童节。在此也祝愿所有的少年儿童们健康快乐的成长！', 2, 1498562999, 1498562999),
(584, 9, 14, '高楼失火该往哪里跑？', 'jhk', 0, 0, '高楼失火该往上还是往下跑呢？\r\n想必有很大一部分人在高楼生活或工作吧，如果你处在高楼上，突然失火了怎么办呢？\r\n          你是往下跑还是往上跑哦？\r\n    废话不多说\r\n    专家建议：首先迅速的找到消防通道，向楼下跑，千万别坐电梯跑，更不能往楼上跑。', 2, 1498563488, 1498563488),
(585, 7, 1, '为什么子弹在飞行时旋转？', 'jhk', 0, 0, '旋转的时候能赋予子弹沿弹道飞行时所需的稳定性。为了让子弹旋转，在枪膛内壁有一个螺旋形的槽，这样子弹射出后就像陀螺仪那样围绕自身的轴均匀旋转。', 2, 1498563913, 1498563913),
(586, 10, 13, '为什么把一件物品叫东西？', 'jhk', 0, 0, '有人说在东汉时期，东京(洛阳) 和 西京(长安)  是积聚天下宝贝的地方，人们要去洛阳和长安购置物品，所以就叫「买东」和「买西」，后来买货物就合称为：买东西了。\r\n \r\n    据说：（东和西 是 金和木）-（南和北 是 水和火）水火是不可以装入篮子里的，而金木都可以装入篮子里，所以装入篮子里的物品自然是（东西）而不是南北。所以流传到至今，大家就称之为买东西了，而不是买南北。', 2, 1498563077, 1498563077),
(587, 9, 1, '世界上拥有航母最多的国家是？', 'jhk', 0, 0, '毫无疑问，世界上拥有航母最多的国家是美国，美国是也是世界上最早拥有航母的国家之一。\r\n目前大概在12艘左右 均为尼米兹级航母，最大的为11万吨级左右。\r\n中国的瓦良格号航母：标准排水量：4.7万吨级     满载的话： 6万吨 ，属于中型航母\r\n\r\n航母数量排名：\r\n美国：12\r\n英国：3\r\n意大利：3\r\n印度：3\r\n中国：1\r\n法国：1\r\n俄罗斯：1\r\n西班牙：1\r\n巴西：1\r\n泰国：1\r\n日本：1\r\n韩国：1\r\n阿根廷：1', 2, 1498563959, 1498563959),
(588, 7, 14, '为什么拍照时喜欢比出剪刀？', 'jhk', 0, 0, '很多时候你只要看这个人拍照的手势，就知道他是什么年代的人了，00后拍照爱嘟嘴，90后拍照都是爱捧着脸瞪眼睛，而拍照就不自觉剪刀手的是80后，当然这些手势你可能全都有，恭喜你，你一直都追随着时尚潮流的步伐，剪刀手就是手指握住伸出食指和中指，也叫"V”字手势。很多场合下只要拍照，都会看得见这个手势，剪刀手可谓是老少皆知啊。就像十万个为什么网站一样，谁都知道十万个为什么这个词，有空常来访问本网站哦，呵呵。', 2, 1498563368, 1498563368),
(589, 6, 13, '「工作总结」第一步：工作总结', 'jhk', 0, 0, '点击导航栏上的"统计"链接，可进入到统计页面，这里主要统计了每天了的番茄钟完成情况。\r\n\r\n估计番茄钟总数是指应该完成的事项所估的番茄钟总数。\r\n\r\n实际完成番茄钟总数是实际完成的番茄钟总数。\r\n\r\n任务完成数是指完成的任务数(事项数)。\r\n\r\n内部中断数是指工作时所记录的内部中断数。\r\n\r\n外部中断数是指工作时所记录的外部中断数。\r\n\r\n计划外紧急数是指事项设置为计划外的总数。\r\n\r\n番茄中止数是指番茄钟被中止的总数。\r\n\r\n事项废弃数是指事项被废弃(删除)的总数。\r\n\r\n二次评估数是指番茄钟完成时工作未完成需要第二评估番茄钟的事项总数。\r\n\r\n三次评估数是指番茄钟完成时工作未完成需要第三评估番茄钟的事项总数。', 0, 1498822973, 1498822973),
(590, 6, 13, '「开始工作」第二步：添加到"今日待办"', 'jhk', 0, 0, '相信大家已经在"待办事项"列表里添加了自己近期要完成的事项(工作)了，接下来就是要选择一些今天需要完成的事项拖动"今日待办"里。注意，这个拖动操作就相单于对自己的承诺：今天一定要完成它。\r\n\r\n完成上述的拖动操作后，刚才添加的"待办事项就移动到""今日待办"列表里了。如果此时还没事项正在计时，那么每个"今日待办"事项都有一个蓝色的"开始"按钮，点击某个即可开始该事项(计时)，并跳转到计时页面。\r\n\r\n在计时页面我们可以看到一个倒计时和一个进度条，这些都在暗示着时间的流逝。页面底部还有一个"工作记录"表单，在工作中遇到有什么需要速记的，可以直接写在下面并"保存"。\r\n\r\n在计时页面点击导航栏上的"工作台"链接，可以回到列表页(此时会跳出一个是否离开计时页面的确认框)。"今日待办"列表里正在进行(计时)的事项，状态会显示为"进行中"；其它事项的"开始"按钮变为白色且为不可点击状态。就是说在某一事项完成之前是不可以开始另一件工作的。', 0, 1498823023, 1498823023);
INSERT INTO `articles` (`id`, `cate_id`, `user_id`, `title`, `desc`, `is_top`, `is_publish`, `content`, `view_count`, `created_at`, `updated_at`) VALUES
(591, 7, 13, '「新功能发布」简洁大方的社区功能上线', 'jhk', 0, 0, '咱们这简洁大方的社区功能上线了，让大家久等了。这下，大家在闲的时候我们来这里交流一下互动一下。了解一下其它网友使用TomatoWork也是极好的哇。\r\n\r\n现在来做个自我介绍哈：\r\n\r\n功能日记及番茄百科是管理员模块，用户不能发贴；有什么新添加的功能、新优化的项目我们会在这里分布出来，就像这篇帖子一样。番茄百科会详细介绍一下番茄工作法，各位没事可来这里逛逛。\r\n\r\n新手上路是每个新手必来的地方，建议很篇帖子都应该读一下。这可是TomatoWork幸幸苦苦写的。\r\n\r\n使用技巧可是个宝藏啊，虽然内容不多。介绍了一些怎么高效使用TomatoWork的技巧。\r\n\r\n意见建议自然不用说，各位不用客气，有什么建议意见甚至什么不合适的功能，都可以提出来。我们会一个个的解决掉。\r\n\r\n许愿清单是指大家想要什么功能，可以提出来，我们会考虑在后续工作中添加进来，让TomatoWork满足大多数人的需求。不过我们立足于时间管理，与此无关的需求建议还是不要提了，我们不想到成大而全的网站。只想安安静静的在这里给大家管理时间、监督大家使用好时间。', 2, 1498562813, 1498562813),
(592, 9, 13, '为什么把六月一日定为儿童节', 'jhk', 0, 0, '儿童节是孩童们最高兴的日子，因为这一天父母会买好吃的给他们，还会带他们去游乐园玩耍，在上学的孩子们这一天也会放假，可以说老师们都沾了孩子们的光，老师这一天也会放假，那么这个儿童节为什么会定在每一年的六月一日这天呢？各个国家的儿童节都是什么时候呢？\r\n\r\n    儿童节，也叫六一国际儿童节，是少年儿童的节日，1949年11月，国际民主妇女联合会，在莫斯科举行理事会议，中国和各国代表愤怒地揭露了帝国主义分子和各国反动派残杀、毒害儿童的罪行。为悼念1942年利迪策惨案和全世界战争中死难的儿童，反对虐杀和毒害儿童，保障儿童权利而设立。为了保障世界各国儿童的生存权、保健权和受教育权，为了改善儿童的生活，会议决定以每年的6月1日为国际儿童节日。\r\n\r\n    在此之前，世界上很多国家原本就有儿童节，但各个国家的儿童节时间不一样，比如：韩国儿童节：5月5日，英国儿童节：7月14日，新加坡儿童节：10月1日，当时中国的儿童节是4月4日，自从1949年确立6月1日为国际儿童节以后，世界各国纷纷改掉了原来的儿童节日期，并统一改为"六一国际儿童节"。中国中央人民政府也在1949年12月宣布：将原来的4月1日儿童节改为6月1日儿童节"，并规定在这一天全中国的少年儿童都放假一天。所以新中国第一个儿童节就从1950年6月1日开始了。所以2017年的儿童节是我们国家的第67次儿童节。在此也祝愿所有的少年儿童们健康快乐的成长！', 2, 1498562999, 1498562999),
(593, 9, 14, '高楼失火该往哪里跑？', 'jhk', 0, 0, '高楼失火该往上还是往下跑呢？\r\n想必有很大一部分人在高楼生活或工作吧，如果你处在高楼上，突然失火了怎么办呢？\r\n          你是往下跑还是往上跑哦？\r\n    废话不多说\r\n    专家建议：首先迅速的找到消防通道，向楼下跑，千万别坐电梯跑，更不能往楼上跑。', 2, 1498563488, 1498563488),
(594, 7, 1, '为什么子弹在飞行时旋转？', 'jhk', 0, 0, '旋转的时候能赋予子弹沿弹道飞行时所需的稳定性。为了让子弹旋转，在枪膛内壁有一个螺旋形的槽，这样子弹射出后就像陀螺仪那样围绕自身的轴均匀旋转。', 2, 1498563913, 1498563913),
(595, 10, 13, '为什么把一件物品叫东西？', 'jhk', 0, 0, '有人说在东汉时期，东京(洛阳) 和 西京(长安)  是积聚天下宝贝的地方，人们要去洛阳和长安购置物品，所以就叫「买东」和「买西」，后来买货物就合称为：买东西了。\r\n \r\n    据说：（东和西 是 金和木）-（南和北 是 水和火）水火是不可以装入篮子里的，而金木都可以装入篮子里，所以装入篮子里的物品自然是（东西）而不是南北。所以流传到至今，大家就称之为买东西了，而不是买南北。', 2, 1498563077, 1498563077),
(596, 9, 1, '世界上拥有航母最多的国家是？', 'jhk', 0, 0, '毫无疑问，世界上拥有航母最多的国家是美国，美国是也是世界上最早拥有航母的国家之一。\r\n目前大概在12艘左右 均为尼米兹级航母，最大的为11万吨级左右。\r\n中国的瓦良格号航母：标准排水量：4.7万吨级     满载的话： 6万吨 ，属于中型航母\r\n\r\n航母数量排名：\r\n美国：12\r\n英国：3\r\n意大利：3\r\n印度：3\r\n中国：1\r\n法国：1\r\n俄罗斯：1\r\n西班牙：1\r\n巴西：1\r\n泰国：1\r\n日本：1\r\n韩国：1\r\n阿根廷：1', 2, 1498563959, 1498563959),
(597, 7, 14, '为什么拍照时喜欢比出剪刀？', 'jhk', 0, 0, '很多时候你只要看这个人拍照的手势，就知道他是什么年代的人了，00后拍照爱嘟嘴，90后拍照都是爱捧着脸瞪眼睛，而拍照就不自觉剪刀手的是80后，当然这些手势你可能全都有，恭喜你，你一直都追随着时尚潮流的步伐，剪刀手就是手指握住伸出食指和中指，也叫"V”字手势。很多场合下只要拍照，都会看得见这个手势，剪刀手可谓是老少皆知啊。就像十万个为什么网站一样，谁都知道十万个为什么这个词，有空常来访问本网站哦，呵呵。', 2, 1498563368, 1498563368),
(598, 6, 13, '「工作总结」第一步：工作总结', 'jhk', 0, 0, '点击导航栏上的"统计"链接，可进入到统计页面，这里主要统计了每天了的番茄钟完成情况。\r\n\r\n估计番茄钟总数是指应该完成的事项所估的番茄钟总数。\r\n\r\n实际完成番茄钟总数是实际完成的番茄钟总数。\r\n\r\n任务完成数是指完成的任务数(事项数)。\r\n\r\n内部中断数是指工作时所记录的内部中断数。\r\n\r\n外部中断数是指工作时所记录的外部中断数。\r\n\r\n计划外紧急数是指事项设置为计划外的总数。\r\n\r\n番茄中止数是指番茄钟被中止的总数。\r\n\r\n事项废弃数是指事项被废弃(删除)的总数。\r\n\r\n二次评估数是指番茄钟完成时工作未完成需要第二评估番茄钟的事项总数。\r\n\r\n三次评估数是指番茄钟完成时工作未完成需要第三评估番茄钟的事项总数。', 0, 1498822973, 1498822973),
(599, 6, 13, '「开始工作」第二步：添加到"今日待办"', 'jhk', 0, 0, '相信大家已经在"待办事项"列表里添加了自己近期要完成的事项(工作)了，接下来就是要选择一些今天需要完成的事项拖动"今日待办"里。注意，这个拖动操作就相单于对自己的承诺：今天一定要完成它。\r\n\r\n完成上述的拖动操作后，刚才添加的"待办事项就移动到""今日待办"列表里了。如果此时还没事项正在计时，那么每个"今日待办"事项都有一个蓝色的"开始"按钮，点击某个即可开始该事项(计时)，并跳转到计时页面。\r\n\r\n在计时页面我们可以看到一个倒计时和一个进度条，这些都在暗示着时间的流逝。页面底部还有一个"工作记录"表单，在工作中遇到有什么需要速记的，可以直接写在下面并"保存"。\r\n\r\n在计时页面点击导航栏上的"工作台"链接，可以回到列表页(此时会跳出一个是否离开计时页面的确认框)。"今日待办"列表里正在进行(计时)的事项，状态会显示为"进行中"；其它事项的"开始"按钮变为白色且为不可点击状态。就是说在某一事项完成之前是不可以开始另一件工作的。', 0, 1498823023, 1498823023),
(600, 7, 13, '「新功能发布」简洁大方的社区功能上线', 'jhk', 0, 0, '咱们这简洁大方的社区功能上线了，让大家久等了。这下，大家在闲的时候我们来这里交流一下互动一下。了解一下其它网友使用TomatoWork也是极好的哇。\r\n\r\n现在来做个自我介绍哈：\r\n\r\n功能日记及番茄百科是管理员模块，用户不能发贴；有什么新添加的功能、新优化的项目我们会在这里分布出来，就像这篇帖子一样。番茄百科会详细介绍一下番茄工作法，各位没事可来这里逛逛。\r\n\r\n新手上路是每个新手必来的地方，建议很篇帖子都应该读一下。这可是TomatoWork幸幸苦苦写的。\r\n\r\n使用技巧可是个宝藏啊，虽然内容不多。介绍了一些怎么高效使用TomatoWork的技巧。\r\n\r\n意见建议自然不用说，各位不用客气，有什么建议意见甚至什么不合适的功能，都可以提出来。我们会一个个的解决掉。\r\n\r\n许愿清单是指大家想要什么功能，可以提出来，我们会考虑在后续工作中添加进来，让TomatoWork满足大多数人的需求。不过我们立足于时间管理，与此无关的需求建议还是不要提了，我们不想到成大而全的网站。只想安安静静的在这里给大家管理时间、监督大家使用好时间。', 2, 1498562813, 1498562813),
(601, 9, 13, '为什么把六月一日定为儿童节', 'jhk', 0, 0, '儿童节是孩童们最高兴的日子，因为这一天父母会买好吃的给他们，还会带他们去游乐园玩耍，在上学的孩子们这一天也会放假，可以说老师们都沾了孩子们的光，老师这一天也会放假，那么这个儿童节为什么会定在每一年的六月一日这天呢？各个国家的儿童节都是什么时候呢？\r\n\r\n    儿童节，也叫六一国际儿童节，是少年儿童的节日，1949年11月，国际民主妇女联合会，在莫斯科举行理事会议，中国和各国代表愤怒地揭露了帝国主义分子和各国反动派残杀、毒害儿童的罪行。为悼念1942年利迪策惨案和全世界战争中死难的儿童，反对虐杀和毒害儿童，保障儿童权利而设立。为了保障世界各国儿童的生存权、保健权和受教育权，为了改善儿童的生活，会议决定以每年的6月1日为国际儿童节日。\r\n\r\n    在此之前，世界上很多国家原本就有儿童节，但各个国家的儿童节时间不一样，比如：韩国儿童节：5月5日，英国儿童节：7月14日，新加坡儿童节：10月1日，当时中国的儿童节是4月4日，自从1949年确立6月1日为国际儿童节以后，世界各国纷纷改掉了原来的儿童节日期，并统一改为"六一国际儿童节"。中国中央人民政府也在1949年12月宣布：将原来的4月1日儿童节改为6月1日儿童节"，并规定在这一天全中国的少年儿童都放假一天。所以新中国第一个儿童节就从1950年6月1日开始了。所以2017年的儿童节是我们国家的第67次儿童节。在此也祝愿所有的少年儿童们健康快乐的成长！', 2, 1498562999, 1498562999),
(602, 9, 14, '高楼失火该往哪里跑？', 'jhk', 0, 0, '高楼失火该往上还是往下跑呢？\r\n想必有很大一部分人在高楼生活或工作吧，如果你处在高楼上，突然失火了怎么办呢？\r\n          你是往下跑还是往上跑哦？\r\n    废话不多说\r\n    专家建议：首先迅速的找到消防通道，向楼下跑，千万别坐电梯跑，更不能往楼上跑。', 2, 1498563488, 1498563488),
(603, 7, 1, '为什么子弹在飞行时旋转？', 'jhk', 0, 0, '旋转的时候能赋予子弹沿弹道飞行时所需的稳定性。为了让子弹旋转，在枪膛内壁有一个螺旋形的槽，这样子弹射出后就像陀螺仪那样围绕自身的轴均匀旋转。', 2, 1498563913, 1498563913),
(604, 10, 13, '为什么把一件物品叫东西？', 'jhk', 0, 0, '有人说在东汉时期，东京(洛阳) 和 西京(长安)  是积聚天下宝贝的地方，人们要去洛阳和长安购置物品，所以就叫「买东」和「买西」，后来买货物就合称为：买东西了。\r\n \r\n    据说：（东和西 是 金和木）-（南和北 是 水和火）水火是不可以装入篮子里的，而金木都可以装入篮子里，所以装入篮子里的物品自然是（东西）而不是南北。所以流传到至今，大家就称之为买东西了，而不是买南北。', 2, 1498563077, 1498563077),
(605, 9, 1, '世界上拥有航母最多的国家是？', 'jhk', 0, 0, '毫无疑问，世界上拥有航母最多的国家是美国，美国是也是世界上最早拥有航母的国家之一。\r\n目前大概在12艘左右 均为尼米兹级航母，最大的为11万吨级左右。\r\n中国的瓦良格号航母：标准排水量：4.7万吨级     满载的话： 6万吨 ，属于中型航母\r\n\r\n航母数量排名：\r\n美国：12\r\n英国：3\r\n意大利：3\r\n印度：3\r\n中国：1\r\n法国：1\r\n俄罗斯：1\r\n西班牙：1\r\n巴西：1\r\n泰国：1\r\n日本：1\r\n韩国：1\r\n阿根廷：1', 2, 1498563959, 1498563959),
(606, 7, 14, '为什么拍照时喜欢比出剪刀？', 'jhk', 0, 0, '很多时候你只要看这个人拍照的手势，就知道他是什么年代的人了，00后拍照爱嘟嘴，90后拍照都是爱捧着脸瞪眼睛，而拍照就不自觉剪刀手的是80后，当然这些手势你可能全都有，恭喜你，你一直都追随着时尚潮流的步伐，剪刀手就是手指握住伸出食指和中指，也叫"V”字手势。很多场合下只要拍照，都会看得见这个手势，剪刀手可谓是老少皆知啊。就像十万个为什么网站一样，谁都知道十万个为什么这个词，有空常来访问本网站哦，呵呵。', 2, 1498563368, 1498563368),
(607, 6, 13, '「工作总结」第一步：工作总结', 'jhk', 0, 0, '点击导航栏上的"统计"链接，可进入到统计页面，这里主要统计了每天了的番茄钟完成情况。\r\n\r\n估计番茄钟总数是指应该完成的事项所估的番茄钟总数。\r\n\r\n实际完成番茄钟总数是实际完成的番茄钟总数。\r\n\r\n任务完成数是指完成的任务数(事项数)。\r\n\r\n内部中断数是指工作时所记录的内部中断数。\r\n\r\n外部中断数是指工作时所记录的外部中断数。\r\n\r\n计划外紧急数是指事项设置为计划外的总数。\r\n\r\n番茄中止数是指番茄钟被中止的总数。\r\n\r\n事项废弃数是指事项被废弃(删除)的总数。\r\n\r\n二次评估数是指番茄钟完成时工作未完成需要第二评估番茄钟的事项总数。\r\n\r\n三次评估数是指番茄钟完成时工作未完成需要第三评估番茄钟的事项总数。', 0, 1498822973, 1498822973),
(608, 6, 13, '「开始工作」第二步：添加到"今日待办"', 'jhk', 0, 0, '相信大家已经在"待办事项"列表里添加了自己近期要完成的事项(工作)了，接下来就是要选择一些今天需要完成的事项拖动"今日待办"里。注意，这个拖动操作就相单于对自己的承诺：今天一定要完成它。\r\n\r\n完成上述的拖动操作后，刚才添加的"待办事项就移动到""今日待办"列表里了。如果此时还没事项正在计时，那么每个"今日待办"事项都有一个蓝色的"开始"按钮，点击某个即可开始该事项(计时)，并跳转到计时页面。\r\n\r\n在计时页面我们可以看到一个倒计时和一个进度条，这些都在暗示着时间的流逝。页面底部还有一个"工作记录"表单，在工作中遇到有什么需要速记的，可以直接写在下面并"保存"。\r\n\r\n在计时页面点击导航栏上的"工作台"链接，可以回到列表页(此时会跳出一个是否离开计时页面的确认框)。"今日待办"列表里正在进行(计时)的事项，状态会显示为"进行中"；其它事项的"开始"按钮变为白色且为不可点击状态。就是说在某一事项完成之前是不可以开始另一件工作的。', 1, 1498823023, 1498823023);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `created_at`, `updated_at`) VALUES
(6, '新手入门', 1498538778, 1498538778),
(7, '功能日记', 1498538793, 1498538793),
(8, '意见反馈', 1498538801, 1498538801),
(9, '触膝长谈', 1498538824, 1498538824),
(10, '关于青春', 1498538833, 1498538833);

-- --------------------------------------------------------

--
-- 表的结构 `outofplan`
--

CREATE TABLE IF NOT EXISTS `outofplan` (
  `outofplanid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `playevent` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `create_at` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`outofplanid`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `outofplan`
--

INSERT INTO `outofplan` (`outofplanid`, `userId`, `playevent`, `create_at`) VALUES
(9, 1, '士大夫发士大夫而非手动梵蒂冈地方官', 1498140009),
(10, 1, '的人开理发店；法开发贷款老顾客老顾客了靠过来考过的', 1498140119),
(13, 1, '', 1498141346),
(14, 1, '', 1498141352),
(15, 1, '', 1498141356),
(30, 4, '佛山电台嘎热帖敢惹啊他', 1498223444);

-- --------------------------------------------------------

--
-- 表的结构 `summary`
--

CREATE TABLE IF NOT EXISTS `summary` (
  `summary_id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `summary` longtext CHARACTER SET utf8mb4,
  `create_at` int(11) NOT NULL DEFAULT '0',
  `update_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`summary_id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `summary`
--

INSERT INTO `summary` (`summary_id`, `userId`, `summary`, `create_at`, `update_at`) VALUES
(26, 4, '测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试', 1498223429, 0),
(27, 1, '今天天气不错', 1498223605, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `userEmail` varchar(20) NOT NULL COMMENT '邮箱',
  `password` char(32) NOT NULL COMMENT '密码',
  `create_at` int(11) unsigned NOT NULL DEFAULT '0',
  `identifier` varchar(50) NOT NULL,
  `timeout` int(11) unsigned NOT NULL DEFAULT '0',
  `token` varchar(32) NOT NULL,
  `updated_at` int(11) unsigned NOT NULL DEFAULT '0',
  `power` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userId`, `username`, `userEmail`, `password`, `create_at`, `identifier`, `timeout`, `token`, `updated_at`, `power`) VALUES
(1, '陈业涛', '1012510740@QQ.COM', 'e10adc3949ba59abbe56e057f20f883e', 0, '40cc7e6f8353f99d753a126b983c2fff', 1498833166, 'ae34d1ae1ef1990cde8d7f34f530ce5f', 0, 1),
(3, '潇洒', '10@QQ.COM', 'e10adc3949ba59abbe56e057f20f883e', 0, '34', 1498267046, '3e4c4b940470654967b38b1cae1121ce', 0, 0),
(4, '林肯', '10125@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '', 0, '', 0, 0),
(5, '涛子', '10125107400@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498306724, '', 0, '', 0, 0),
(6, '520@qq.com', '520@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498312477, '', 0, '', 0, 0),
(7, '1314@qq.com', '1314@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498312503, '', 0, '', 0, 0),
(8, '5201314', '5201314@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498312535, '', 0, '', 0, 0),
(9, '123456@qq.com', '123456@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498312684, '', 0, '', 0, 0),
(10, 'fg', '45@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498315683, '', 0, '', 0, 0),
(11, 'fsd', '1536@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498315802, '', 0, '', 0, 0),
(13, '李名', '1@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498561925, '', 0, '', 0, 0),
(14, '七哥', '7@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498562134, 'a04791a4efa721d177f170218cb43d4b', 1498828639, 'f6717c72b5be0fbc1cc18bb316890413', 0, 0),
(15, '涛子', '123@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1498562203, '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `userdatas`
--

CREATE TABLE IF NOT EXISTS `userdatas` (
  `userId` int(11) NOT NULL,
  `event` mediumtext NOT NULL,
  `tofqnum` varchar(20) NOT NULL,
  `result` varchar(20) DEFAULT '2',
  `fqrecord` varchar(20) DEFAULT NULL,
  `Date` int(11) NOT NULL,
  `fqlength` int(11) NOT NULL,
  `dataId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`dataId`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=151 ;

--
-- 转存表中的数据 `userdatas`
--

INSERT INTO `userdatas` (`userId`, `event`, `tofqnum`, `result`, `fqrecord`, `Date`, `fqlength`, `dataId`) VALUES
(1, '小青', '1', NULL, NULL, 1497085503, 25, 42),
(1, '西湖', '45', NULL, NULL, 1497070110, 25, 38),
(0, '更换', '1', NULL, NULL, 1497100322, 25, 44),
(1, '123456', '3', NULL, NULL, 1497090805, 40, 43),
(1, '阿门', '3', NULL, 'x', 1497105952, 25, 45),
(1, 'test', '2', NULL, NULL, 1497107929, 10, 46),
(1, 'test1', '12', NULL, NULL, 1497107974, 25, 47),
(1, 'dsf ', 'df ', NULL, 'x', 1497108000, 1, 48),
(1, '小名', '5', NULL, 'xxxxx', 1497170690, 1, 54),
(1, '小罗', '3', NULL, NULL, 1497170708, 25, 55),
(0, '啊哈', '2', '2', NULL, 1497190713, 1, 57),
(1, '小康', '4', NULL, NULL, 1497170724, 25, 56),
(1, '买东西', '2', '3', 'xxxxxxxxxx', 1497236015, 1, 58),
(1, '你好吗', '2', '1', 'xxxxx', 1497236034, 1, 59),
(1, '阿三', '3', '1', NULL, 1497311654, 1, 61),
(1, '你们在干嘛', '2', '3', NULL, 1497452654, 30, 62),
(1, '的萨芬', '2', '3', NULL, 1497452843, 25, 63),
(1, 'xiaoming', '2', '1', NULL, 1497498824, 25, 64),
(1, 'xiaoqing', '1', '1', NULL, 1497513301, 25, 66),
(1, '新闻', '1', '1', 'x', 1497662675, 30, 80),
(1, 'php—原型搭建', '4', '1', 'xxxxx', 1497662691, 30, 81),
(1, '世界地理-南亚—伊拉克', '1', '1', 'x', 1497662728, 30, 83),
(1, '甜头', '5', '3', NULL, 1497597158, 25, 78),
(1, 'maomao', '1', '3', NULL, 1497597121, 25, 77),
(1, '制定英语计划', '1', '1', 'x', 1497747896, 25, 84),
(1, '新闻', '1', '1', 'x', 1497795590, 25, 88),
(1, 'php—后台搭建', '4', '1', 'xxxx', 1497753784, 25, 86),
(1, '世界地理-南亚—沙特阿拉伯', '1', '1', 'x', 1497793247, 30, 87),
(1, '新闻', '1', '1', 'x', 1497829768, 25, 89),
(1, '早上-voa常速英语', '1', '1', 'x', 1497833793, 25, 90),
(1, 'php—后台搭建', '4', '1', 'xx', 1497835560, 25, 91),
(3, 'xiaoming', '2', '2', NULL, 1497856876, 25, 92),
(1, '新闻', '1', '1', 'x', 1497919422, 25, 94),
(1, 'php—后台搭建', '4', '1', 'xxxxx', 1497921056, 25, 95),
(0, 'xia', '1', '2', NULL, 1498044890, 25, 115),
(0, 'fg', '2', '2', NULL, 1498045585, 25, 116),
(0, 'jh', '5', '2', NULL, 1498044649, 25, 114),
(0, 'fder', '5', '2', NULL, 1498044636, 25, 113),
(0, 'gfh', '45', '2', NULL, 1498044495, 25, 112),
(1, '思政复习', '10', '3', NULL, 1498446949, 25, 143),
(0, '', '', '2', NULL, 1498043744, 25, 110),
(0, 'fd', '6', '2', NULL, 1498044485, 25, 111),
(1, '土耳其', '1', '1', 'x', 1498048290, 25, 121),
(1, '士大夫', '1', '1', NULL, 1498050528, 40, 122),
(1, '世界地理-南亚-以色列', '1', '1', 'x', 1498384682, 25, 142),
(1, '单词18关', '2', '3', 'x', 1498369591, 25, 140),
(1, 'php—后台搭建', '4', '3', 'xx', 1498354313, 25, 139),
(1, '约旦', '1', '1', 'x', 1498316717, 25, 138),
(1, '西亚—叙利亚', '1', '1', 'x', 1498225600, 25, 135),
(1, '新闻', '1', '1', 'x', 1498228893, 25, 136),
(1, '网络安全复习', '10', '3', NULL, 1498446960, 25, 144),
(1, 'linux-复习', '14', '3', NULL, 1498446971, 25, 145),
(1, 'php—后台搭建', '4', '3', NULL, 1498446989, 25, 146),
(1, '新闻', '1', '3', NULL, 1498447003, 25, 147),
(1, '早上-voa常速英语', '1', '3', NULL, 1498447012, 25, 148),
(1, '世界地理-南亚-巴勒斯坦', '1', '1', NULL, 1498447136, 25, 149);

--
-- 限制导出的表
--

--
-- 限制表 `outofplan`
--
ALTER TABLE `outofplan`
  ADD CONSTRAINT `baituo` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- 限制表 `summary`
--
ALTER TABLE `summary`
  ADD CONSTRAINT `summaryid` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
