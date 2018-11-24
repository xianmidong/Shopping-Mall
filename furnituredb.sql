/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : furnituredb

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2018-11-24 16:54:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `address`
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `addressid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `consignee` varchar(20) NOT NULL,
  `telphone` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`addressid`),
  KEY `userid` (`userid`),
  CONSTRAINT `address_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `userinfo` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('1', '14', 'cjl', '123456', '湖北省孝感市飞飞飞');

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(20) NOT NULL,
  `adminpwd` varchar(100) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'llj', 'd210b5a8c79efa7d7d72052b8f1ec9fd');
INSERT INTO `admin` VALUES ('2', 'wxj', 'b6fe41b67bf20528bca63b6264716744');

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `goodsid` int(11) NOT NULL,
  `goodsimg` varchar(200) DEFAULT NULL,
  `goodsname` varchar(100) DEFAULT NULL,
  `goodscolor` varchar(50) DEFAULT NULL,
  `goodsprice` decimal(6,2) DEFAULT NULL,
  `goodscount` varchar(20) DEFAULT NULL,
  `sum` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('59', 'wxj', '35', 'http://localhost/furniture/Public/goods_colorimg/2018-11-08/5be3f2bdafd91.jpg', '淋浴花洒套装', 'rgb(255, 255, 255)', '698.00', '1', '698.00');
INSERT INTO `cart` VALUES ('60', 'wxj', '37', 'http://localhost/furniture/Public/goods_colorimg/2018-11-08/5be3f49c555d1.jpg', '老铜匠花洒', 'rgb(219, 164, 60)', '2700.00', '1', '2700.00');

-- ----------------------------
-- Table structure for `city`
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `cid` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`city`),
  KEY `pid` (`pid`),
  CONSTRAINT `city_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `provincial` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('10', '七台河市', '10');
INSERT INTO `city` VALUES ('4', '三明市', '14');
INSERT INTO `city` VALUES ('12', '三门峡市', '17');
INSERT INTO `city` VALUES ('1', '上海市', '3');
INSERT INTO `city` VALUES ('17', '东莞市', '20');
INSERT INTO `city` VALUES ('5', '东营市', '16');
INSERT INTO `city` VALUES ('5', '中卫市', '30');
INSERT INTO `city` VALUES ('18', '中山市', '20');
INSERT INTO `city` VALUES ('13', '临夏回族自治州', '21');
INSERT INTO `city` VALUES ('10', '临汾市', '6');
INSERT INTO `city` VALUES ('13', '临沂市', '16');
INSERT INTO `city` VALUES ('8', '临沧市', '25');
INSERT INTO `city` VALUES ('6', '丹东市', '8');
INSERT INTO `city` VALUES ('11', '丽水市', '12');
INSERT INTO `city` VALUES ('6', '丽江市', '25');
INSERT INTO `city` VALUES ('9', '乌兰察布市', '32');
INSERT INTO `city` VALUES ('3', '乌海市', '32');
INSERT INTO `city` VALUES ('21', '乌苏市', '31');
INSERT INTO `city` VALUES ('1', '乌鲁木齐市', '31');
INSERT INTO `city` VALUES ('10', '乐山市', '22');
INSERT INTO `city` VALUES ('4', '九江市', '15');
INSERT INTO `city` VALUES ('16', '云林县', '7');
INSERT INTO `city` VALUES ('21', '云浮市', '20');
INSERT INTO `city` VALUES ('6', '五家渠市', '31');
INSERT INTO `city` VALUES ('15', '亳州市', '13');
INSERT INTO `city` VALUES ('13', '仙桃市', '18');
INSERT INTO `city` VALUES ('7', '伊 春 市', '10');
INSERT INTO `city` VALUES ('18', '伊宁市', '31');
INSERT INTO `city` VALUES ('6', '佛山市', '20');
INSERT INTO `city` VALUES ('9', '佳木斯市', '10');
INSERT INTO `city` VALUES ('6', '保定市', '5');
INSERT INTO `city` VALUES ('4', '保山市', '25');
INSERT INTO `city` VALUES ('15', '信阳市', '17');
INSERT INTO `city` VALUES ('2', '克拉玛依市', '31');
INSERT INTO `city` VALUES ('14', '六安市', '13');
INSERT INTO `city` VALUES ('2', '六盘水市', '23');
INSERT INTO `city` VALUES ('1', '兰州市', '21');
INSERT INTO `city` VALUES ('11', '兴安盟', '32');
INSERT INTO `city` VALUES ('9', '内江市', '22');
INSERT INTO `city` VALUES ('21', '凉山彝族自治州', '22');
INSERT INTO `city` VALUES ('2', '包头市', '32');
INSERT INTO `city` VALUES ('1', '北京市', '1');
INSERT INTO `city` VALUES ('5', '北海市', '28');
INSERT INTO `city` VALUES ('3', '十堰市', '18');
INSERT INTO `city` VALUES ('1', '南京市', '11');
INSERT INTO `city` VALUES ('11', '南充市', '22');
INSERT INTO `city` VALUES ('1', '南宁市', '28');
INSERT INTO `city` VALUES ('7', '南平市', '14');
INSERT INTO `city` VALUES ('15', '南投县', '7');
INSERT INTO `city` VALUES ('1', '南昌市', '15');
INSERT INTO `city` VALUES ('6', '南通市', '11');
INSERT INTO `city` VALUES ('13', '南阳市', '17');
INSERT INTO `city` VALUES ('17', '博乐市', '31');
INSERT INTO `city` VALUES ('2', '厦门市', '14');
INSERT INTO `city` VALUES ('4', '双鸭山市', '10');
INSERT INTO `city` VALUES ('22', '台东县', '7');
INSERT INTO `city` VALUES ('13', '台中县', '7');
INSERT INTO `city` VALUES ('4', '台中市', '7');
INSERT INTO `city` VALUES ('8', '台北县', '7');
INSERT INTO `city` VALUES ('1', '台北市', '7');
INSERT INTO `city` VALUES ('18', '台南县', '7');
INSERT INTO `city` VALUES ('5', '台南市', '7');
INSERT INTO `city` VALUES ('10', '台州市', '12');
INSERT INTO `city` VALUES ('1', '合肥市', '13');
INSERT INTO `city` VALUES ('8', '吉安市', '15');
INSERT INTO `city` VALUES ('2', '吉林市', '9');
INSERT INTO `city` VALUES ('7', '吐鲁番市', '31');
INSERT INTO `city` VALUES ('11', '吕梁市', '6');
INSERT INTO `city` VALUES ('3', '吴忠市', '30');
INSERT INTO `city` VALUES ('16', '周口市', '17');
INSERT INTO `city` VALUES ('7', '呼伦贝尔市', '32');
INSERT INTO `city` VALUES ('1', '呼和浩特市', '32');
INSERT INTO `city` VALUES ('11', '和田市', '31');
INSERT INTO `city` VALUES ('11', '咸宁市', '18');
INSERT INTO `city` VALUES ('4', '咸阳市', '27');
INSERT INTO `city` VALUES ('10', '哈密市', '31');
INSERT INTO `city` VALUES ('1', '哈尔滨市', '10');
INSERT INTO `city` VALUES ('2', '唐山市', '5');
INSERT INTO `city` VALUES ('14', '商丘市', '17');
INSERT INTO `city` VALUES ('10', '商洛市', '27');
INSERT INTO `city` VALUES ('9', '喀什市', '31');
INSERT INTO `city` VALUES ('17', '嘉义县', '7');
INSERT INTO `city` VALUES ('7', '嘉义市', '7');
INSERT INTO `city` VALUES ('4', '嘉兴市', '12');
INSERT INTO `city` VALUES ('5', '嘉峪关市', '21');
INSERT INTO `city` VALUES ('3', '四平市', '9');
INSERT INTO `city` VALUES ('4', '固原市', '30');
INSERT INTO `city` VALUES ('5', '图木舒克市', '31');
INSERT INTO `city` VALUES ('3', '基隆市', '7');
INSERT INTO `city` VALUES ('20', '塔城市', '31');
INSERT INTO `city` VALUES ('6', '大 庆 市', '10');
INSERT INTO `city` VALUES ('13', '大兴安岭地区', '10');
INSERT INTO `city` VALUES ('2', '大同市', '6');
INSERT INTO `city` VALUES ('13', '大理白族自治州', '25');
INSERT INTO `city` VALUES ('2', '大连市', '8');
INSERT INTO `city` VALUES ('4', '天水市', '21');
INSERT INTO `city` VALUES ('1', '天津市', '2');
INSERT INTO `city` VALUES ('14', '天门市', '18');
INSERT INTO `city` VALUES ('1', '太原市', '6');
INSERT INTO `city` VALUES ('19', '奎屯市', '31');
INSERT INTO `city` VALUES ('10', '威海市', '16');
INSERT INTO `city` VALUES ('13', '娄底市', '19');
INSERT INTO `city` VALUES ('9', '孝感市', '18');
INSERT INTO `city` VALUES ('9', '宁德市', '14');
INSERT INTO `city` VALUES ('2', '宁波市', '12');
INSERT INTO `city` VALUES ('8', '安庆市', '13');
INSERT INTO `city` VALUES ('9', '安康市', '27');
INSERT INTO `city` VALUES ('5', '安阳市', '17');
INSERT INTO `city` VALUES ('4', '安顺市', '23');
INSERT INTO `city` VALUES ('11', '定西市', '21');
INSERT INTO `city` VALUES ('9', '宜兰县', '7');
INSERT INTO `city` VALUES ('13', '宜宾市', '22');
INSERT INTO `city` VALUES ('5', '宜昌市', '18');
INSERT INTO `city` VALUES ('3', '宝鸡市', '27');
INSERT INTO `city` VALUES ('17', '宣城市', '13');
INSERT INTO `city` VALUES ('12', '宿州市', '13');
INSERT INTO `city` VALUES ('13', '宿迁市', '11');
INSERT INTO `city` VALUES ('20', '屏东县', '7');
INSERT INTO `city` VALUES ('4', '山南地区', '29');
INSERT INTO `city` VALUES ('6', '岳阳市', '19');
INSERT INTO `city` VALUES ('14', '崇左市', '28');
INSERT INTO `city` VALUES ('13', '巢湖市', '13');
INSERT INTO `city` VALUES ('17', '巴中市', '22');
INSERT INTO `city` VALUES ('8', '巴彦淖尔市', '32');
INSERT INTO `city` VALUES ('4', '常州市', '11');
INSERT INTO `city` VALUES ('7', '常德市', '19');
INSERT INTO `city` VALUES ('8', '平凉市', '21');
INSERT INTO `city` VALUES ('4', '平顶山市', '17');
INSERT INTO `city` VALUES ('7', '广元市', '22');
INSERT INTO `city` VALUES ('14', '广安市', '22');
INSERT INTO `city` VALUES ('1', '广州市', '20');
INSERT INTO `city` VALUES ('10', '庆阳市', '21');
INSERT INTO `city` VALUES ('13', '库尔勒市', '31');
INSERT INTO `city` VALUES ('10', '廊坊市', '5');
INSERT INTO `city` VALUES ('6', '延安市', '27');
INSERT INTO `city` VALUES ('9', '延边朝鲜族自治州', '9');
INSERT INTO `city` VALUES ('2', '开封市', '17');
INSERT INTO `city` VALUES ('7', '张家口市', '5');
INSERT INTO `city` VALUES ('8', '张家界市', '19');
INSERT INTO `city` VALUES ('7', '张掖市', '21');
INSERT INTO `city` VALUES ('14', '彰化县', '7');
INSERT INTO `city` VALUES ('3', '徐州市', '11');
INSERT INTO `city` VALUES ('14', '德宏傣族景颇族自治州', '25');
INSERT INTO `city` VALUES ('14', '德州市', '16');
INSERT INTO `city` VALUES ('5', '德阳市', '22');
INSERT INTO `city` VALUES ('9', '忻州市', '6');
INSERT INTO `city` VALUES ('12', '怀化市', '19');
INSERT INTO `city` VALUES ('15', '怒江傈傈族自治州', '25');
INSERT INTO `city` VALUES ('7', '思茅市', '25');
INSERT INTO `city` VALUES ('17', '恩施土家族苗族自治州', '18');
INSERT INTO `city` VALUES ('11', '惠州市', '20');
INSERT INTO `city` VALUES ('1', '成都市', '22');
INSERT INTO `city` VALUES ('10', '扬州市', '11');
INSERT INTO `city` VALUES ('8', '承德市', '5');
INSERT INTO `city` VALUES ('4', '抚顺市', '8');
INSERT INTO `city` VALUES ('1', '拉萨市', '29');
INSERT INTO `city` VALUES ('20', '揭阳市', '20');
INSERT INTO `city` VALUES ('3', '攀枝花市', '22');
INSERT INTO `city` VALUES ('9', '文山壮族苗族自治州', '25');
INSERT INTO `city` VALUES ('7', '新乡市', '17');
INSERT INTO `city` VALUES ('5', '新余市', '15');
INSERT INTO `city` VALUES ('11', '新竹县', '7');
INSERT INTO `city` VALUES ('6', '新竹市', '7');
INSERT INTO `city` VALUES ('2', '无锡市', '11');
INSERT INTO `city` VALUES ('5', '日喀则地区', '29');
INSERT INTO `city` VALUES ('11', '日照市', '16');
INSERT INTO `city` VALUES ('1', '昆明市', '25');
INSERT INTO `city` VALUES ('14', '昌吉市', '31');
INSERT INTO `city` VALUES ('3', '昌都地区', '29');
INSERT INTO `city` VALUES ('5', '昭通市', '25');
INSERT INTO `city` VALUES ('7', '晋中市', '6');
INSERT INTO `city` VALUES ('5', '晋城市', '6');
INSERT INTO `city` VALUES ('2', '景德镇市', '15');
INSERT INTO `city` VALUES ('2', '曲靖市', '25');
INSERT INTO `city` VALUES ('6', '朔州市', '6');
INSERT INTO `city` VALUES ('13', '朝阳市', '8');
INSERT INTO `city` VALUES ('5', '本溪市', '8');
INSERT INTO `city` VALUES ('13', '来宾市', '28');
INSERT INTO `city` VALUES ('1', '杭州市', '12');
INSERT INTO `city` VALUES ('7', '松原市', '9');
INSERT INTO `city` VALUES ('7', '林芝地区', '29');
INSERT INTO `city` VALUES ('6', '果洛藏族自治州', '26');
INSERT INTO `city` VALUES ('4', '枣庄市', '16');
INSERT INTO `city` VALUES ('2', '柳州市', '28');
INSERT INTO `city` VALUES ('2', '株洲市', '19');
INSERT INTO `city` VALUES ('3', '桂林市', '28');
INSERT INTO `city` VALUES ('10', '桃园县', '7');
INSERT INTO `city` VALUES ('12', '梅州市', '20');
INSERT INTO `city` VALUES ('4', '梧州市', '28');
INSERT INTO `city` VALUES ('12', '楚雄彝族自治州', '25');
INSERT INTO `city` VALUES ('8', '榆林市', '27');
INSERT INTO `city` VALUES ('6', '武威市', '21');
INSERT INTO `city` VALUES ('1', '武汉市', '18');
INSERT INTO `city` VALUES ('6', '毕节地区', '23');
INSERT INTO `city` VALUES ('11', '永州市', '19');
INSERT INTO `city` VALUES ('7', '汉中市', '27');
INSERT INTO `city` VALUES ('4', '汕头市', '20');
INSERT INTO `city` VALUES ('13', '汕尾市', '20');
INSERT INTO `city` VALUES ('7', '江门市', '20');
INSERT INTO `city` VALUES ('16', '池州市', '13');
INSERT INTO `city` VALUES ('1', '沈阳市', '8');
INSERT INTO `city` VALUES ('9', '沧州市', '5');
INSERT INTO `city` VALUES ('12', '河池市', '28');
INSERT INTO `city` VALUES ('14', '河源市', '20');
INSERT INTO `city` VALUES ('5', '泉州市', '14');
INSERT INTO `city` VALUES ('9', '泰安市', '16');
INSERT INTO `city` VALUES ('12', '泰州市', '11');
INSERT INTO `city` VALUES ('4', '泸州市', '22');
INSERT INTO `city` VALUES ('3', '洛阳市', '17');
INSERT INTO `city` VALUES ('1', '济南市', '16');
INSERT INTO `city` VALUES ('8', '济宁市', '16');
INSERT INTO `city` VALUES ('18', '济源市', '17');
INSERT INTO `city` VALUES ('2', '海东地区', '26');
INSERT INTO `city` VALUES ('3', '海北藏族自治州', '26');
INSERT INTO `city` VALUES ('5', '海南藏族自治州', '26');
INSERT INTO `city` VALUES ('8', '海西蒙古族藏族自治州', '26');
INSERT INTO `city` VALUES ('3', '淄博市', '16');
INSERT INTO `city` VALUES ('6', '淮北市', '13');
INSERT INTO `city` VALUES ('4', '淮南市', '13');
INSERT INTO `city` VALUES ('8', '淮安市', '11');
INSERT INTO `city` VALUES ('2', '深圳市', '20');
INSERT INTO `city` VALUES ('16', '清远市', '20');
INSERT INTO `city` VALUES ('3', '温州市', '12');
INSERT INTO `city` VALUES ('5', '渭南市', '27');
INSERT INTO `city` VALUES ('5', '湖州市', '12');
INSERT INTO `city` VALUES ('3', '湘潭市', '19');
INSERT INTO `city` VALUES ('14', '湘西土家族苗族自治州', '19');
INSERT INTO `city` VALUES ('8', '湛江市', '20');
INSERT INTO `city` VALUES ('10', '滁州市', '13');
INSERT INTO `city` VALUES ('16', '滨州市', '16');
INSERT INTO `city` VALUES ('11', '漯河市', '17');
INSERT INTO `city` VALUES ('6', '漳州市', '14');
INSERT INTO `city` VALUES ('7', '潍坊市', '16');
INSERT INTO `city` VALUES ('15', '潜江市', '18');
INSERT INTO `city` VALUES ('19', '潮州市', '20');
INSERT INTO `city` VALUES ('21', '澎湖县', '7');
INSERT INTO `city` VALUES ('1', '澳门特别行政区', '33');
INSERT INTO `city` VALUES ('9', '濮阳市', '17');
INSERT INTO `city` VALUES ('6', '烟台市', '16');
INSERT INTO `city` VALUES ('8', '焦作市', '17');
INSERT INTO `city` VALUES ('8', '牡丹江市', '10');
INSERT INTO `city` VALUES ('9', '玉林市', '28');
INSERT INTO `city` VALUES ('7', '玉树藏族自治州', '26');
INSERT INTO `city` VALUES ('3', '玉溪市', '25');
INSERT INTO `city` VALUES ('3', '珠海市', '20');
INSERT INTO `city` VALUES ('14', '甘南藏族自治州', '21');
INSERT INTO `city` VALUES ('20', '甘孜藏族自治州', '22');
INSERT INTO `city` VALUES ('8', '白城市', '9');
INSERT INTO `city` VALUES ('6', '白山市', '9');
INSERT INTO `city` VALUES ('3', '白银市', '21');
INSERT INTO `city` VALUES ('10', '百色市', '28');
INSERT INTO `city` VALUES ('9', '益阳市', '19');
INSERT INTO `city` VALUES ('9', '盐城市', '11');
INSERT INTO `city` VALUES ('11', '盘锦市', '8');
INSERT INTO `city` VALUES ('12', '眉山市', '22');
INSERT INTO `city` VALUES ('2', '石嘴山市', '30');
INSERT INTO `city` VALUES ('1', '石家庄市', '5');
INSERT INTO `city` VALUES ('3', '石河子市　', '31');
INSERT INTO `city` VALUES ('16', '神农架林区', '18');
INSERT INTO `city` VALUES ('1', '福州市', '14');
INSERT INTO `city` VALUES ('3', '秦皇岛市', '5');
INSERT INTO `city` VALUES ('16', '米泉市', '31');
INSERT INTO `city` VALUES ('10', '红河哈尼族彝族自治州', '25');
INSERT INTO `city` VALUES ('6', '绍兴市', '12');
INSERT INTO `city` VALUES ('12', '绥 化 市', '10');
INSERT INTO `city` VALUES ('6', '绵阳市', '22');
INSERT INTO `city` VALUES ('15', '聊城市', '16');
INSERT INTO `city` VALUES ('10', '肇庆市', '20');
INSERT INTO `city` VALUES ('2', '自贡市', '22');
INSERT INTO `city` VALUES ('9', '舟山市', '12');
INSERT INTO `city` VALUES ('2', '芜湖市', '13');
INSERT INTO `city` VALUES ('23', '花莲县', '7');
INSERT INTO `city` VALUES ('5', '苏州市', '11');
INSERT INTO `city` VALUES ('12', '苗栗县', '7');
INSERT INTO `city` VALUES ('9', '茂名市', '20');
INSERT INTO `city` VALUES ('4', '荆州市', '18');
INSERT INTO `city` VALUES ('8', '荆门市', '18');
INSERT INTO `city` VALUES ('3', '莆田市', '14');
INSERT INTO `city` VALUES ('12', '莱芜市', '16');
INSERT INTO `city` VALUES ('17', '菏泽市', '16');
INSERT INTO `city` VALUES ('3', '萍乡市', '15');
INSERT INTO `city` VALUES ('8', '营口市', '8');
INSERT INTO `city` VALUES ('14', '葫芦岛市', '8');
INSERT INTO `city` VALUES ('3', '蚌埠市', '13');
INSERT INTO `city` VALUES ('11', '衡水市', '5');
INSERT INTO `city` VALUES ('4', '衡阳市', '19');
INSERT INTO `city` VALUES ('8', '衢州市', '12');
INSERT INTO `city` VALUES ('6', '襄樊市', '18');
INSERT INTO `city` VALUES ('11', '西双版纳傣族自治州', '25');
INSERT INTO `city` VALUES ('1', '西宁市', '26');
INSERT INTO `city` VALUES ('1', '西安市', '27');
INSERT INTO `city` VALUES ('10', '许昌市', '17');
INSERT INTO `city` VALUES ('8', '贵港市', '28');
INSERT INTO `city` VALUES ('1', '贵阳市', '23');
INSERT INTO `city` VALUES ('11', '贺州市', '28');
INSERT INTO `city` VALUES ('18', '资阳市', '22');
INSERT INTO `city` VALUES ('7', '赣州市', '15');
INSERT INTO `city` VALUES ('4', '赤峰市', '32');
INSERT INTO `city` VALUES ('4', '辽源市', '9');
INSERT INTO `city` VALUES ('10', '辽阳市', '8');
INSERT INTO `city` VALUES ('15', '达州市', '22');
INSERT INTO `city` VALUES ('8', '运城市', '6');
INSERT INTO `city` VALUES ('7', '连云港市', '11');
INSERT INTO `city` VALUES ('16', '迪庆藏族自治州', '25');
INSERT INTO `city` VALUES ('5', '通化市', '9');
INSERT INTO `city` VALUES ('5', '通辽市', '32');
INSERT INTO `city` VALUES ('8', '遂宁市', '22');
INSERT INTO `city` VALUES ('3', '遵义市', '23');
INSERT INTO `city` VALUES ('5', '邢台市', '5');
INSERT INTO `city` VALUES ('2', '那曲地区', '29');
INSERT INTO `city` VALUES ('4', '邯郸市', '5');
INSERT INTO `city` VALUES ('5', '邵阳市', '19');
INSERT INTO `city` VALUES ('1', '郑州市', '17');
INSERT INTO `city` VALUES ('10', '郴州市', '19');
INSERT INTO `city` VALUES ('6', '鄂尔多斯市', '32');
INSERT INTO `city` VALUES ('7', '鄂州市', '18');
INSERT INTO `city` VALUES ('9', '酒泉市', '21');
INSERT INTO `city` VALUES ('1', '重庆市', '4');
INSERT INTO `city` VALUES ('7', '金华市', '12');
INSERT INTO `city` VALUES ('2', '金昌市', '21');
INSERT INTO `city` VALUES ('7', '钦州市', '28');
INSERT INTO `city` VALUES ('12', '铁岭市', '8');
INSERT INTO `city` VALUES ('5', '铜仁地区', '23');
INSERT INTO `city` VALUES ('2', '铜川市', '27');
INSERT INTO `city` VALUES ('7', '铜陵市', '13');
INSERT INTO `city` VALUES ('1', '银川市', '30');
INSERT INTO `city` VALUES ('10', '锡林郭勒盟', '32');
INSERT INTO `city` VALUES ('7', '锦州市', '8');
INSERT INTO `city` VALUES ('11', '镇江市', '11');
INSERT INTO `city` VALUES ('1', '长春市', '9');
INSERT INTO `city` VALUES ('1', '长沙市', '19');
INSERT INTO `city` VALUES ('4', '长治市', '6');
INSERT INTO `city` VALUES ('15', '阜康市', '31');
INSERT INTO `city` VALUES ('9', '阜新市', '8');
INSERT INTO `city` VALUES ('11', '阜阳市', '13');
INSERT INTO `city` VALUES ('6', '防城港市', '28');
INSERT INTO `city` VALUES ('15', '阳江市', '20');
INSERT INTO `city` VALUES ('3', '阳泉市', '6');
INSERT INTO `city` VALUES ('8', '阿克苏市', '31');
INSERT INTO `city` VALUES ('22', '阿勒泰市', '31');
INSERT INTO `city` VALUES ('12', '阿图什市', '31');
INSERT INTO `city` VALUES ('19', '阿坝藏族羌族自治州', '22');
INSERT INTO `city` VALUES ('12', '阿拉善盟', '32');
INSERT INTO `city` VALUES ('4', '阿拉尔市', '31');
INSERT INTO `city` VALUES ('6', '阿里地区', '29');
INSERT INTO `city` VALUES ('12', '陇南市', '21');
INSERT INTO `city` VALUES ('12', '随州市', '18');
INSERT INTO `city` VALUES ('16', '雅安市', '22');
INSERT INTO `city` VALUES ('2', '青岛市', '16');
INSERT INTO `city` VALUES ('3', '鞍山市', '8');
INSERT INTO `city` VALUES ('5', '韶关市', '20');
INSERT INTO `city` VALUES ('1', '香港特别行政区', '34');
INSERT INTO `city` VALUES ('5', '马鞍山市', '13');
INSERT INTO `city` VALUES ('17', '驻马店市', '17');
INSERT INTO `city` VALUES ('19', '高雄县', '7');
INSERT INTO `city` VALUES ('2', '高雄市', '7');
INSERT INTO `city` VALUES ('5', '鸡 西 市', '10');
INSERT INTO `city` VALUES ('3', '鹤 岗 市', '10');
INSERT INTO `city` VALUES ('6', '鹤壁市', '17');
INSERT INTO `city` VALUES ('6', '鹰潭市', '15');
INSERT INTO `city` VALUES ('10', '黄冈市', '18');
INSERT INTO `city` VALUES ('4', '黄南藏族自治州', '26');
INSERT INTO `city` VALUES ('9', '黄山市', '13');
INSERT INTO `city` VALUES ('2', '黄石市', '18');
INSERT INTO `city` VALUES ('11', '黑 河 市', '10');
INSERT INTO `city` VALUES ('8', '黔东南苗族侗族自治州', '23');
INSERT INTO `city` VALUES ('9', '黔南布依族苗族自治州', '23');
INSERT INTO `city` VALUES ('7', '黔西南布依族苗族自治州', '23');
INSERT INTO `city` VALUES ('2', '齐齐哈尔市', '10');
INSERT INTO `city` VALUES ('8', '龙岩市', '14');

-- ----------------------------
-- Table structure for `county`
-- ----------------------------
DROP TABLE IF EXISTS `county`;
CREATE TABLE `county` (
  `countyid` int(11) NOT NULL AUTO_INCREMENT,
  `county` varchar(20) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`countyid`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of county
-- ----------------------------
INSERT INTO `county` VALUES ('1', '明溪县', '4');
INSERT INTO `county` VALUES ('2', '清流县', '4');
INSERT INTO `county` VALUES ('3', '宁化县', '4');
INSERT INTO `county` VALUES ('4', '大田县', '4');
INSERT INTO `county` VALUES ('5', '尤溪县', '4');
INSERT INTO `county` VALUES ('6', '沙县', '4');
INSERT INTO `county` VALUES ('7', '将乐县', '4');
INSERT INTO `county` VALUES ('8', '泰宁县', '4');
INSERT INTO `county` VALUES ('9', '建宁县', '4');
INSERT INTO `county` VALUES ('10', '顺昌县', '7');
INSERT INTO `county` VALUES ('11', '浦城县', '7');
INSERT INTO `county` VALUES ('12', '光泽县', '7');
INSERT INTO `county` VALUES ('13', '松溪县', '7');
INSERT INTO `county` VALUES ('14', '政和县', '7');
INSERT INTO `county` VALUES ('15', '思明区', '2');
INSERT INTO `county` VALUES ('16', '海沧区', '2');
INSERT INTO `county` VALUES ('17', '湖里区', '2');
INSERT INTO `county` VALUES ('18', '翔安区', '2');
INSERT INTO `county` VALUES ('19', '同安区', '2');
INSERT INTO `county` VALUES ('20', '集美区', '2');
INSERT INTO `county` VALUES ('21', '霞浦县', '9');
INSERT INTO `county` VALUES ('22', '古田县', '9');
INSERT INTO `county` VALUES ('23', '屏南县', '9');
INSERT INTO `county` VALUES ('24', '寿宁县', '9');
INSERT INTO `county` VALUES ('25', '周宁县', '9');
INSERT INTO `county` VALUES ('26', '拓荣县', '9');
INSERT INTO `county` VALUES ('27', '惠安县', '5');
INSERT INTO `county` VALUES ('28', '安溪县', '5');
INSERT INTO `county` VALUES ('29', '永春县', '5');
INSERT INTO `county` VALUES ('30', '德化县', '5');
INSERT INTO `county` VALUES ('31', '金门县', '5');
INSERT INTO `county` VALUES ('32', '云霄县', '6');
INSERT INTO `county` VALUES ('33', '漳浦县', '6');
INSERT INTO `county` VALUES ('34', '诏安县', '6');
INSERT INTO `county` VALUES ('35', '长泰县', '6');
INSERT INTO `county` VALUES ('36', '东山县', '6');
INSERT INTO `county` VALUES ('37', '南靖县', '6');
INSERT INTO `county` VALUES ('38', '平和县', '6');
INSERT INTO `county` VALUES ('39', '华安县', '6');
INSERT INTO `county` VALUES ('40', '闽侯县', '1');
INSERT INTO `county` VALUES ('41', '连江县', '1');
INSERT INTO `county` VALUES ('42', '罗源县', '1');
INSERT INTO `county` VALUES ('43', '闽清县', '1');
INSERT INTO `county` VALUES ('44', '永泰县', '1');
INSERT INTO `county` VALUES ('45', '平潭县', '1');
INSERT INTO `county` VALUES ('46', '城厢区', '3');
INSERT INTO `county` VALUES ('47', '涵江区', '3');
INSERT INTO `county` VALUES ('48', '荔城区', '3');
INSERT INTO `county` VALUES ('49', '秀屿区', '3');
INSERT INTO `county` VALUES ('50', '长汀县', '8');
INSERT INTO `county` VALUES ('51', '上杭县', '8');
INSERT INTO `county` VALUES ('52', '武平县', '8');
INSERT INTO `county` VALUES ('53', '连城县', '8');
INSERT INTO `county` VALUES ('54', '九江县', '4');
INSERT INTO `county` VALUES ('55', '武宁县', '4');
INSERT INTO `county` VALUES ('56', '修水县', '4');
INSERT INTO `county` VALUES ('57', '永修县', '0');
INSERT INTO `county` VALUES ('58', '德安县', '4');
INSERT INTO `county` VALUES ('59', '都昌县', '4');
INSERT INTO `county` VALUES ('60', '湖口县', '4');
INSERT INTO `county` VALUES ('61', '彭泽县', '4');
INSERT INTO `county` VALUES ('62', '东湖区', '1');
INSERT INTO `county` VALUES ('63', '西湖区', '1');
INSERT INTO `county` VALUES ('64', '青云谱区', '1');
INSERT INTO `county` VALUES ('65', '湾里区', '1');
INSERT INTO `county` VALUES ('66', '青山湖区', '1');
INSERT INTO `county` VALUES ('67', '新建区', '1');
INSERT INTO `county` VALUES ('68', '吉安县', '8');
INSERT INTO `county` VALUES ('69', '吉水县', '8');
INSERT INTO `county` VALUES ('70', '峡江县', '8');
INSERT INTO `county` VALUES ('71', '新干县', '8');
INSERT INTO `county` VALUES ('72', '永丰县', '8');
INSERT INTO `county` VALUES ('73', '泰和县', '8');
INSERT INTO `county` VALUES ('74', '遂川县', '8');
INSERT INTO `county` VALUES ('75', '万安县', '8');
INSERT INTO `county` VALUES ('76', '安福县', '8');
INSERT INTO `county` VALUES ('77', '永新县', '8');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goodsid` int(11) NOT NULL AUTO_INCREMENT,
  `goodsname` varchar(100) NOT NULL,
  `typename` varchar(10) NOT NULL,
  `goodsprice` decimal(6,2) DEFAULT NULL,
  `goodssize` varchar(50) DEFAULT NULL,
  `goodsweight` varchar(10) DEFAULT NULL,
  `goodsmaterial` varchar(50) DEFAULT NULL,
  `goodscount` varchar(20) DEFAULT NULL,
  `goodsimg` varchar(50) DEFAULT NULL,
  `isshow` varchar(4) DEFAULT '0' COMMENT '1展示，0不展示',
  `isnew` varchar(4) DEFAULT '0' COMMENT '1新品，0旧品',
  `detailimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`goodsid`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('23', '马桶浴柜组合套装', '卫浴', '9999.99', '61cm(含)-90cm(含)', '100', '橡胶木', '100', '2018-11-08/5be3d78c696c3.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('32', '简约卫浴镜led', '卫浴', '932.00', '800mm*600mm ', '50', '金属', '120', '2018-11-08/5be3e7ca124a2.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('33', '箭牌卫浴洗衣机柜', '卫浴', '4200.00', '120cm以上', '50', '不锈钢', '420', '2018-11-08/5be3ea6963ee0.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('34', '四季沐歌卫浴淋浴花洒', '卫浴', '898.00', '61cm(含)-90cm(含)', '20', '局部铜', '203', '2018-11-08/5be3eed1ec0ce.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('35', '淋浴花洒套装', '卫浴', '698.00', '1200mm-500mm', '20', '塑料、精铜', '300', '2018-11-08/5be3f0e699668.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('37', '老铜匠花洒', '卫浴', '2700.00', '1200mm-500mm', '23', '铜', '140', '2018-11-08/5be3f35bcce95.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('38', '箭牌毛巾架', '卫浴', '927.00', '60cm', '20', '太空铝', '99', '2018-11-08/5be3f558adaff.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('39', '可优比儿童餐具套装', '餐厨', '498.00', '450ml/300ml/200ml', '10', '不锈钢', '150', '2018-11-08/5be3f7e806d01.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('40', '双枪合金筷', '餐厨', '23.00', '24cm', '0.5', 'PPS及玻璃纤维合成材料', '120', '2018-11-08/5be3f9dc05bcf.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('41', '北欧碗碟', '餐厨', '718.00', '4.5英寸', '1', '瓷', '300', '2018-11-08/5be3fb25e556d.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('42', '景德镇陶瓷器餐具', '餐厨', '736.00', '4.5英寸', '2', '45%以上骨粉骨瓷', '300', '2018-11-08/5be3fcd9debb5.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('43', '厨房置物架', '餐厨', '223.00', '33cm*41cm', '2', '不锈钢', '100', '2018-11-08/5be3ff221d794.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('44', '调料盒', '餐厨', '118.00', '39*23*21cm', '0.5', '塑料', '85', '2018-11-08/5be414f21a899.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('45', '厨房置物架落地锅架', '餐厨', '349.00', '110*55*30cm', '10', '金属', '100', '2018-11-08/5be417857d996.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('46', '可叠加塑料收纳箱', '收纳', '136.00', '28L', '1', '塑料', '185\\', '2018-11-08/5be41a0fb9033.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('47', '衣柜收纳分层架子', '收纳', '39.00', '28*25*19cm', '1', '铁', '110', '2018-11-08/5be41bf4a912b.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('48', '鞋盒整理箱', '收纳', '199.00', '21x32x13cm', '1', '塑料', '230', '2018-11-08/5be41daf1901b.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('49', '脏衣篮收纳筐', '收纳', '59.00', '48*60*32cm', '1', '牛津布/棉麻布', '212', '2018-11-08/5be41f3d90a3b.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('50', '木柜子收纳架', '收纳', '330.00', '82*60*38cm', '2', '木质', '320', '2018-11-08/5be4210ab01bd.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('51', '奇鲁草编收纳蓝纸', '收纳', '99.00', '10*20*29cm', '1', '纸绳、棉麻里布、铁架', '320', '2018-11-08/5be423b87d355.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('52', '日本天马收纳箱', '收纳', '210.00', '45*45*20cm', '1', '塑料', '88', '2018-11-08/5be425f4d2e09.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('53', '现代简约双人床', '家具', '2899.00', '1500*2000cm', '30', '桦木', '99', '2018-11-08/5be4282314851.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('54', '大理石餐桌椅组合', '家具', '8786.00', '160*90*75cm', '20', '大理石', '152', '2018-11-08/5be42d6921673.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('55', '北欧书桌电脑台式桌', '家具', '432.00', '80*60*75cm', '4', '木', '152', '2018-11-08/5be42f446d217.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('56', '床上书桌', '家具', '225.00', '76*40cm', '8', '人造板', '666', '2018-11-08/5be433746702a.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('57', ' 钢化玻璃电脑桌', '家具', '956.00', '100cm', '30', '金属', '452', '2018-11-08/5be437aae3671.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('58', '现代简约懒人塑料凳', '家具', '370.00', '125mm(不含)-800mm(不含)', '4', '其他', '88', '2018-11-09/5be4dc6c06f66.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('59', '北欧风椅子', '家具', '376.00', '125mm(不含)-800mm(不含)', '7.5', '金属', '142', '2018-11-09/5be4df1d83ee6.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('60', '美式吊灯全铜', '灯饰', '4770.00', '87*45cm', '20', '铜、玻璃', '323', '2018-11-09/5be4e24a15448.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('61', '北欧风格灯具', '灯饰', '2510.00', '125mm(不含)-800mm(不含)', '5', '铁', '452', '2018-11-09/5be4e4bc1e40f.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('62', '琪朗现代简约吊灯', '灯饰', '4098.00', '40*60*80cm', '20', '铝', '152', '2018-11-09/5be4f41084f0d.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('63', '后现代美式台灯', '灯饰', '699.00', '28*70*25.5cm', '5', '陶瓷、布', '362', '2018-11-09/5be4f6e5d9572.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('64', '登对北欧台灯', '灯饰', '733.00', '55.5*19cm', '5', '铁', '521', '2018-11-09/5be4f8883383e.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('65', '温馨浪漫欧式灯', '灯饰', '499.00', '25.5*44*20cm', '2', '玻璃', '100', '2018-11-09/5be4faf84c5c1.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('67', '森马家纺床上四件套', '家纺', '909.00', '1.5m', '2', '棉', '632', '2018-11-09/5be5148de4221.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('68', 'LOVO单人枕头芯', '家纺', '98.00', '73*47*20cm', '0.5', '棉花', '162', '2018-11-09/5be51985345b1.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('69', '夏季冰丝席', '家纺', '137.00', '2.0*2.2m 1.2m', '0.5', '纤维素材料(再生纤维素纤维)', '144', '2018-11-09/5be51aae3e947.jpg', '1', '0', null);
INSERT INTO `goods` VALUES ('70', '儿童定型枕', '家纺', '650.00', '26*56cm', '1', '保健枕', '253', '2018-11-09/5be51dba63777.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('71', '毛毯加厚珊瑚绒', '家纺', '198.00', '120cmX230cm', '3', '涤纶', '253', '2018-11-09/5be51fdeea47b.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('72', 'ins网红双层窗帘', '家纺', '273.00', '平铺2*2.1挂钩一片 ', '3', '布帘+纱帘', '362', '2018-11-09/5be521f546f83.jpg', '1', '1', null);
INSERT INTO `goods` VALUES ('73', '韩式田园窗帘', '家纺', '160.00', '宽1.5×高2.0一片', '4', '涤纶', '262', '2018-11-09/5be523e952095.jpg', '1', '0', null);

-- ----------------------------
-- Table structure for `goodscolor`
-- ----------------------------
DROP TABLE IF EXISTS `goodscolor`;
CREATE TABLE `goodscolor` (
  `colorid` int(11) NOT NULL AUTO_INCREMENT,
  `goodsname` varchar(100) DEFAULT NULL,
  `goodscolor` varchar(7) DEFAULT NULL,
  `goodsimg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`colorid`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goodscolor
-- ----------------------------
INSERT INTO `goodscolor` VALUES ('2', '马桶浴柜组合套装', '#ffffff', '2018-11-08/5be3e64299b14.png');
INSERT INTO `goodscolor` VALUES ('3', '马桶浴柜组合套装', '#542929', '2018-11-08/5be3e676729f2.png');
INSERT INTO `goodscolor` VALUES ('4', '马桶浴柜组合套装', '#7b0000', '2018-11-08/5be3e6a6c60f7.png');
INSERT INTO `goodscolor` VALUES ('5', '简约卫浴镜led', '#ffffff', '2018-11-08/5be3e95888e42.jpg');
INSERT INTO `goodscolor` VALUES ('6', '箭牌卫浴洗衣机柜', '#ffffff', '2018-11-08/5be3ed30e1d50.png');
INSERT INTO `goodscolor` VALUES ('7', '箭牌卫浴洗衣机柜', '#edeceb', '2018-11-08/5be3ed662a016.png');
INSERT INTO `goodscolor` VALUES ('8', '四季沐歌卫浴淋浴花洒', '#eae9e8', '2018-11-08/5be3f01143a85.jpg');
INSERT INTO `goodscolor` VALUES ('9', '淋浴花洒套装', '#ffffff', '2018-11-08/5be3f2bdafd91.jpg');
INSERT INTO `goodscolor` VALUES ('10', '淋浴花洒套装', '#000000', '2018-11-08/5be3f2cc42301.jpg');
INSERT INTO `goodscolor` VALUES ('11', '老铜匠花洒', '#dba43c', '2018-11-08/5be3f49c555d1.jpg');
INSERT INTO `goodscolor` VALUES ('12', '箭牌毛巾架', '#000000', '2018-11-08/5be3f57542aa1.jpg');
INSERT INTO `goodscolor` VALUES ('13', '箭牌毛巾架', '#dfdfdf', '2018-11-08/5be3f588e0e5c.jpg');
INSERT INTO `goodscolor` VALUES ('14', '可优比儿童餐具套装', '#8ce7f0', '2018-11-08/5be3f8087f623.jpg');
INSERT INTO `goodscolor` VALUES ('15', '可优比儿童餐具套装', '#ffe1c4', '2018-11-08/5be3f82e2fd4e.jpg');
INSERT INTO `goodscolor` VALUES ('16', '可优比儿童餐具套装', '#ff2424', '2018-11-08/5be3f85191017.jpg');
INSERT INTO `goodscolor` VALUES ('17', '可优比儿童餐具套装', '#faf098', '2018-11-08/5be3f87e3d281.jpg');
INSERT INTO `goodscolor` VALUES ('18', '双枪合金筷', '#000000', '2018-11-08/5be3f9ee4539b.jpg');
INSERT INTO `goodscolor` VALUES ('19', '北欧碗碟', '#9ededb', '2018-11-08/5be3fb6a9d8b7.jpg');
INSERT INTO `goodscolor` VALUES ('20', '北欧碗碟', '#ffffff', '2018-11-08/5be3fb8a1aa2f.jpg');
INSERT INTO `goodscolor` VALUES ('21', '景德镇陶瓷器餐具', '#fbe373', '2018-11-08/5be3fd42f2c10.jpg');
INSERT INTO `goodscolor` VALUES ('22', '厨房置物架', '#b3fd82', '2018-11-08/5be3ff445f61c.jpg');
INSERT INTO `goodscolor` VALUES ('23', '厨房置物架', '#e8e8e8', '2018-11-08/5be3ff589d6eb.jpg');
INSERT INTO `goodscolor` VALUES ('24', '厨房置物架', '#000000', '2018-11-08/5be3ff67eeb38.jpg');
INSERT INTO `goodscolor` VALUES ('25', '调料盒', '#69f217', '2018-11-08/5be415254bc9b.jpg');
INSERT INTO `goodscolor` VALUES ('26', '调料盒', '#ffffff', '2018-11-08/5be415308d33b.jpg');
INSERT INTO `goodscolor` VALUES ('27', '调料盒', '#4fdce3', '2018-11-08/5be41556817e0.jpg');
INSERT INTO `goodscolor` VALUES ('28', '调料盒', '#ffd9d0', '2018-11-08/5be41578a925c.jpg');
INSERT INTO `goodscolor` VALUES ('29', '调料盒', '#ff3737', '2018-11-08/5be4158ac6520.jpg');
INSERT INTO `goodscolor` VALUES ('30', '厨房置物架落地锅架', '#000000', '2018-11-08/5be417a560a19.jpg');
INSERT INTO `goodscolor` VALUES ('31', '厨房置物架落地锅架', '#e3e3e3', '2018-11-08/5be417b3cd094.jpg');
INSERT INTO `goodscolor` VALUES ('32', '可叠加塑料收纳箱', '#c0c0c0', '2018-11-08/5be41a477bb9b.jpg');
INSERT INTO `goodscolor` VALUES ('33', '可叠加塑料收纳箱', '#ffffff', '2018-11-08/5be41a525483d.jpg');
INSERT INTO `goodscolor` VALUES ('34', '衣柜收纳分层架子', '#ffffff', '2018-11-08/5be41c30ce1c2.jpg');
INSERT INTO `goodscolor` VALUES ('35', '衣柜收纳分层架子', '#000000', '2018-11-08/5be41c3f8bd50.jpg');
INSERT INTO `goodscolor` VALUES ('36', '鞋盒整理箱', '#c0c0c0', '2018-11-08/5be41dc369e6a.jpg');
INSERT INTO `goodscolor` VALUES ('37', '鞋盒整理箱', '#9acb8d', '2018-11-08/5be41ddbb299b.jpg');
INSERT INTO `goodscolor` VALUES ('38', '鞋盒整理箱', '#79dce1', '2018-11-08/5be41dec2d510.jpg');
INSERT INTO `goodscolor` VALUES ('39', '脏衣篮收纳筐', '#ffcaca', '2018-11-08/5be41f61bea96.jpg');
INSERT INTO `goodscolor` VALUES ('40', '脏衣篮收纳筐', '#bbffff', '2018-11-08/5be41f74030ef.jpg');
INSERT INTO `goodscolor` VALUES ('41', '脏衣篮收纳筐', '#c0c0c0', '2018-11-08/5be41f8eef9e9.jpg');
INSERT INTO `goodscolor` VALUES ('42', '木柜子收纳架', '#b76542', '2018-11-08/5be42152038dc.jpg');
INSERT INTO `goodscolor` VALUES ('43', '奇鲁草编收纳蓝纸', '#c0ebab', '2018-11-08/5be423ddb9491.jpg');
INSERT INTO `goodscolor` VALUES ('44', '奇鲁草编收纳蓝纸', '#8f5749', '2018-11-08/5be424091ee2c.jpg');
INSERT INTO `goodscolor` VALUES ('45', '奇鲁草编收纳蓝纸', '#decead', '2018-11-08/5be4244533cae.jpg');
INSERT INTO `goodscolor` VALUES ('46', '日本天马收纳箱', '#e4dcd3', '2018-11-08/5be426314407b.jpg');
INSERT INTO `goodscolor` VALUES ('47', '日本天马收纳箱', '#f6f6f6', '2018-11-08/5be42656e2236.jpg');
INSERT INTO `goodscolor` VALUES ('48', '日本天马收纳箱', '#000000', '2018-11-08/5be42666051d3.jpg');
INSERT INTO `goodscolor` VALUES ('49', '现代简约双人床', '#5d5d5d', '2018-11-08/5be4283cc6d64.jpg');
INSERT INTO `goodscolor` VALUES ('50', '大理石餐桌椅组合', '#743a3a', '2018-11-08/5be42d91d7841.jpg');
INSERT INTO `goodscolor` VALUES ('51', '北欧书桌电脑台式桌', '#ffffff', '2018-11-08/5be42f5770b15.jpg');
INSERT INTO `goodscolor` VALUES ('52', '床上书桌', '#824242', '2018-11-08/5be433a8b22bc.jpg');
INSERT INTO `goodscolor` VALUES ('53', '床上书桌', '#fdf8f2', '2018-11-08/5be433d6ce2a4.jpg');
INSERT INTO `goodscolor` VALUES ('54', '床上书桌', '#f7de9d', '2018-11-08/5be4343502eb0.jpg');
INSERT INTO `goodscolor` VALUES ('55', '钢化玻璃电脑桌', '#000000', '2018-11-08/5be437ce01d17.jpg');
INSERT INTO `goodscolor` VALUES ('56', '钢化玻璃电脑桌', '#ffffff', '2018-11-08/5be437dda2ecf.jpg');
INSERT INTO `goodscolor` VALUES ('57', '现代简约懒人塑料凳', '#ffc8c8', '2018-11-09/5be4dc9080204.jpg');
INSERT INTO `goodscolor` VALUES ('58', '现代简约懒人塑料凳', '#c7ff8e', '2018-11-09/5be4dc9e889f7.jpg');
INSERT INTO `goodscolor` VALUES ('59', '现代简约懒人塑料凳', '#ff0000', '2018-11-09/5be4dcaba4afb.jpg');
INSERT INTO `goodscolor` VALUES ('60', '现代简约懒人塑料凳', '#8ba2a3', '2018-11-09/5be4de12c1f63.jpg');
INSERT INTO `goodscolor` VALUES ('61', '北欧风椅子', '#0a5c8d', '2018-11-09/5be4df77150b5.jpg');
INSERT INTO `goodscolor` VALUES ('62', '北欧风椅子', '#87a824', '2018-11-09/5be4dfcecbbdd.jpg');
INSERT INTO `goodscolor` VALUES ('63', '北欧风椅子', '#efd310', '2018-11-09/5be4dfef31ed6.jpg');
INSERT INTO `goodscolor` VALUES ('64', '美式吊灯全铜', '#f7e126', '2018-11-09/5be4e26e4f6d4.jpg');
INSERT INTO `goodscolor` VALUES ('65', '北欧风格灯具', '#63d1bb', '2018-11-09/5be4e4fde9ef1.jpg');
INSERT INTO `goodscolor` VALUES ('66', '北欧风格灯具', '#ebee64', '2018-11-09/5be4e50f86f91.jpg');
INSERT INTO `goodscolor` VALUES ('67', '北欧风格灯具', '#011f50', '2018-11-09/5be4e52c2b6ed.jpg');
INSERT INTO `goodscolor` VALUES ('68', '琪朗现代简约吊灯', '#804040', '2018-11-09/5be4f44f434d7.jpg');
INSERT INTO `goodscolor` VALUES ('69', '后现代美式台灯', '#000000', '2018-11-09/5be4f6fc3c162.jpg');
INSERT INTO `goodscolor` VALUES ('70', '后现代美式台灯', '#f9dca2', '2018-11-09/5be4f7258cb9f.jpg');
INSERT INTO `goodscolor` VALUES ('71', '登对北欧台灯', '#000000', '2018-11-09/5be4f8e551e53.jpg');
INSERT INTO `goodscolor` VALUES ('72', '登对北欧台灯', '#ffffff', '2018-11-09/5be4f8f1327e0.jpg');
INSERT INTO `goodscolor` VALUES ('73', '温馨浪漫欧式灯', '#007d00', '2018-11-09/5be4fb119ce3b.jpg');
INSERT INTO `goodscolor` VALUES ('74', '温馨浪漫欧式灯', '#f8b385', '2018-11-09/5be4fb3032b6f.jpg');
INSERT INTO `goodscolor` VALUES ('75', '温馨浪漫欧式灯', '#7ecb9f', '2018-11-09/5be4fb5aae8d2.jpg');
INSERT INTO `goodscolor` VALUES ('76', '温馨浪漫欧式灯', '#fde0c1', '2018-11-09/5be4fbaccacaf.jpg');
INSERT INTO `goodscolor` VALUES ('77', '美式陶瓷台灯', '#ffffff', '2018-11-09/5be547cc58ca2.jpg');
INSERT INTO `goodscolor` VALUES ('79', '美式陶瓷台灯', '#008000', '2018-11-09/5be547f5d9cae.jpg');
INSERT INTO `goodscolor` VALUES ('80', '森马家纺床上四件套', '#ffa6d2', '2018-11-09/5be517bf923c4.jpg');
INSERT INTO `goodscolor` VALUES ('81', '森马家纺床上四件套', '#c1fdfa', '2018-11-09/5be51815abb26.jpg');
INSERT INTO `goodscolor` VALUES ('82', '森马家纺床上四件套', '#385f85', '2018-11-09/5be5184809f2c.jpg');
INSERT INTO `goodscolor` VALUES ('83', 'LOVO单人枕头芯', '#ffffff', '2018-11-09/5be5199f60b6e.jpg');
INSERT INTO `goodscolor` VALUES ('84', '夏季冰丝席', '#a7a7a7', '2018-11-09/5be51ad12f6c4.jpg');
INSERT INTO `goodscolor` VALUES ('85', '夏季冰丝席', '#ffb9b9', '2018-11-09/5be51af3996d9.jpg');
INSERT INTO `goodscolor` VALUES ('86', '夏季冰丝席', '#8dcef1', '2018-11-09/5be51b02910c7.jpg');
INSERT INTO `goodscolor` VALUES ('87', '儿童定型枕', '#9de6e2', '2018-11-09/5be51dd3d0051.jpg');
INSERT INTO `goodscolor` VALUES ('88', '儿童定型枕', '#ffd9ec', '2018-11-09/5be51dffd4c7a.jpg');
INSERT INTO `goodscolor` VALUES ('89', '儿童定型枕', '#fffef7', '2018-11-09/5be51e12c9212.jpg');
INSERT INTO `goodscolor` VALUES ('90', '毛毯加厚珊瑚绒', '#a1a1a1', '2018-11-09/5be51ff80417a.jpg');
INSERT INTO `goodscolor` VALUES ('91', '毛毯加厚珊瑚绒', '#ffffff', '2018-11-09/5be52008da83c.jpg');
INSERT INTO `goodscolor` VALUES ('92', '毛毯加厚珊瑚绒', '#99c9db', '2018-11-09/5be5201dd564e.jpg');
INSERT INTO `goodscolor` VALUES ('93', 'ins网红双层窗帘', '#b2b2b2', '2018-11-09/5be5220c01c4f.jpg');
INSERT INTO `goodscolor` VALUES ('94', 'ins网红双层窗帘', '#74b3d8', '2018-11-09/5be5221aedf42.jpg');
INSERT INTO `goodscolor` VALUES ('95', 'ins网红双层窗帘', '#ffcaca', '2018-11-09/5be5222997474.jpg');
INSERT INTO `goodscolor` VALUES ('96', 'ins网红双层窗帘', '#fef3e2', '2018-11-09/5be5224b3a269.jpg');
INSERT INTO `goodscolor` VALUES ('97', '韩式田园窗帘', '#a6ecd9', '2018-11-09/5be5240eb5034.jpg');
INSERT INTO `goodscolor` VALUES ('98', '韩式田园窗帘', '#ffbbbb', '2018-11-09/5be52498e5cb5.png');

-- ----------------------------
-- Table structure for `goodsdetail`
-- ----------------------------
DROP TABLE IF EXISTS `goodsdetail`;
CREATE TABLE `goodsdetail` (
  `photoid` int(11) NOT NULL AUTO_INCREMENT,
  `goodsname` varchar(100) DEFAULT NULL,
  `photointro` varchar(100) DEFAULT NULL,
  `photoimg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goodsdetail
-- ----------------------------
INSERT INTO `goodsdetail` VALUES ('8', '马桶浴柜组合套装', null, '2018-11-08/5be3e455cab82.png');
INSERT INTO `goodsdetail` VALUES ('11', '箭牌卫浴洗衣机柜', null, '2018-11-08/5be3ec4013d51.png');
INSERT INTO `goodsdetail` VALUES ('13', '淋浴花洒套装', null, '2018-11-08/5be3f2a7d5240.png');
INSERT INTO `goodsdetail` VALUES ('14', '老铜匠花洒', null, '2018-11-08/5be3f442f38a3.png');
INSERT INTO `goodsdetail` VALUES ('15', '箭牌毛巾架', null, '2018-11-08/5be3f64113b4a.png');
INSERT INTO `goodsdetail` VALUES ('16', '可优比儿童餐具套装', null, '2018-11-08/5be3f8ef48803.png');
INSERT INTO `goodsdetail` VALUES ('17', '双枪合金筷', null, '2018-11-08/5be3fa775c22d.png');
INSERT INTO `goodsdetail` VALUES ('18', '北欧碗碟', null, '2018-11-08/5be3fc1b90640.png');
INSERT INTO `goodsdetail` VALUES ('19', '景德镇陶瓷器餐具', null, '2018-11-08/5be3fe207df96.png');
INSERT INTO `goodsdetail` VALUES ('20', '厨房置物架', null, '2018-11-08/5be40083322b9.png');
INSERT INTO `goodsdetail` VALUES ('21', '调料盒', null, '2018-11-08/5be4164d081ca.png');
INSERT INTO `goodsdetail` VALUES ('22', '厨房置物架落地锅架', null, '2018-11-08/5be4189120f5b.png');
INSERT INTO `goodsdetail` VALUES ('23', '可叠加塑料收纳箱', null, '2018-11-08/5be41b1880a3a.png');
INSERT INTO `goodsdetail` VALUES ('24', '衣柜收纳分层架子', null, '2018-11-08/5be41ce015bc9.png');
INSERT INTO `goodsdetail` VALUES ('25', '脏衣篮收纳筐', null, '2018-11-08/5be4205826580.png');
INSERT INTO `goodsdetail` VALUES ('26', '木柜子收纳架', null, '2018-11-08/5be422e9ccfaa.png');
INSERT INTO `goodsdetail` VALUES ('27', '奇鲁草编收纳蓝纸', null, '2018-11-08/5be424e634270.png');
INSERT INTO `goodsdetail` VALUES ('28', '日本天马收纳箱', null, '2018-11-08/5be427026ad41.png');
INSERT INTO `goodsdetail` VALUES ('29', '现代简约双人床', null, '2018-11-08/5be42970b0874.png');
INSERT INTO `goodsdetail` VALUES ('30', '大理石餐桌椅组合', null, '2018-11-08/5be42e7f2b18c.png');
INSERT INTO `goodsdetail` VALUES ('31', '北欧书桌电脑台式桌', null, '2018-11-08/5be4302436334.png');
INSERT INTO `goodsdetail` VALUES ('32', '床上书桌', null, '2018-11-08/5be436d01a94d.png');
INSERT INTO `goodsdetail` VALUES ('33', '钢化玻璃电脑桌', null, '2018-11-08/5be439de2e8e2.png');
INSERT INTO `goodsdetail` VALUES ('34', '现代简约懒人塑料凳', null, '2018-11-09/5be4ddda9f3e0.png');
INSERT INTO `goodsdetail` VALUES ('35', '北欧风椅子', null, '2018-11-09/5be4e10272bb4.png');
INSERT INTO `goodsdetail` VALUES ('36', '美式吊灯全铜', null, '2018-11-09/5be4e30e183da.png');
INSERT INTO `goodsdetail` VALUES ('37', '北欧风格灯具', null, '2018-11-09/5be4e5e25c8f5.png');
INSERT INTO `goodsdetail` VALUES ('38', '琪朗现代简约吊灯', null, '2018-11-09/5be4f5da584e7.png');
INSERT INTO `goodsdetail` VALUES ('39', '后现代美式台灯', null, '2018-11-09/5be4f814e8561.png');
INSERT INTO `goodsdetail` VALUES ('40', '登对北欧台灯', null, '2018-11-09/5be4f9b9623ff.png');
INSERT INTO `goodsdetail` VALUES ('41', '温馨浪漫欧式灯', null, '2018-11-09/5be4fcba3d106.png');
INSERT INTO `goodsdetail` VALUES ('42', '美式陶瓷台灯', null, '2018-11-09/5be4ff10c7eff.png');
INSERT INTO `goodsdetail` VALUES ('43', '森马家纺床上四件套', null, '2018-11-09/5be51904a6948.png');
INSERT INTO `goodsdetail` VALUES ('44', 'LOVO单人枕头芯', null, '2018-11-09/5be51a5bed1c4.png');
INSERT INTO `goodsdetail` VALUES ('45', '夏季冰丝席', null, '2018-11-09/5be51c10e1088.png');
INSERT INTO `goodsdetail` VALUES ('46', '儿童定型枕', null, '2018-11-09/5be51eaf728c6.png');
INSERT INTO `goodsdetail` VALUES ('47', '毛毯加厚珊瑚绒', null, '2018-11-09/5be520ef55512.png');
INSERT INTO `goodsdetail` VALUES ('48', 'ins网红双层窗帘', null, '2018-11-09/5be522f6a0af9.png');
INSERT INTO `goodsdetail` VALUES ('49', '韩式田园窗帘', null, '2018-11-09/5be524ff4f040.png');

-- ----------------------------
-- Table structure for `goodstype`
-- ----------------------------
DROP TABLE IF EXISTS `goodstype`;
CREATE TABLE `goodstype` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(10) NOT NULL,
  `typenote` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goodstype
-- ----------------------------
INSERT INTO `goodstype` VALUES ('22', '卫浴', '好');
INSERT INTO `goodstype` VALUES ('23', '餐厨', '好用');
INSERT INTO `goodstype` VALUES ('24', '收纳', '方便');
INSERT INTO `goodstype` VALUES ('25', '家具', '实用');
INSERT INTO `goodstype` VALUES ('26', '灯饰', '美轮美奂');
INSERT INTO `goodstype` VALUES ('27', '家纺', '舒适');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `newstitle` varchar(50) DEFAULT NULL,
  `newscontent` varchar(100) DEFAULT NULL,
  `newsimg` varchar(100) DEFAULT NULL,
  `newsdata` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('5', '小空间田园风格小屋', '室内设计师Amanda在有限的预算下翻新了她狭小的小屋。其实不需要很多钱或很多空间来打造你心爱的家。', '2018-11-09/5be5436133699.png', '2018-11-09');
INSERT INTO `news` VALUES ('6', '和朋友一起享受手工制作的乐趣', '尝试一种新的爱好和招待方式。Amanda喜欢在自己的小屋举办手工制作之夜，来看看她如何制作节日花环。', '2018-11-09/5be5438a5a78b.png', '2018-11-09');
INSERT INTO `news` VALUES ('7', '建筑设计师夫妇的家庭办公室', '如果你家同时也是办公室和展厅，那么花点心思，按照你的需求进行布置。Adam和Deborah的开放式生活/工\r\n作空间集功能和娱乐于一体。', '2018-11-09/5be543b1975c7.png', '2018-11-09');
INSERT INTO `news` VALUES ('8', '释放你的创意热情', '挥洒你的热情，设计一处能为你带来灵感的创意空间。来看看Aysu是怎么做的吧!', '2018-11-09/5be543ccba11c.png', '2018-11-09');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `orderid` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `telphone` varchar(20) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `ordersum` int(10) DEFAULT NULL,
  `orderdate` varchar(20) DEFAULT NULL,
  `orderstate` varchar(10) DEFAULT '0' COMMENT '0为待付款，1为待收货，2为已收货',
  `addressid` int(11) NOT NULL,
  `deliver` int(11) DEFAULT '0' COMMENT '是否发货，0为不发货，1为发货',
  PRIMARY KEY (`orderid`),
  KEY `addressid` (`addressid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('201811192158521542635932', '小芳芳', '15779178907', '1911', '7', '2018-11-19 21:58:52', '1', '1', '0');

-- ----------------------------
-- Table structure for `orderdetail`
-- ----------------------------
DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE `orderdetail` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(100) NOT NULL,
  `goodsid` int(11) NOT NULL,
  `goodscount` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orderdetail
-- ----------------------------
INSERT INTO `orderdetail` VALUES ('1', '201811192158521542635932', '72', '7');

-- ----------------------------
-- Table structure for `personal`
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `personalid` int(11) NOT NULL AUTO_INCREMENT,
  `personalname` varchar(50) NOT NULL,
  `sex` varchar(4) NOT NULL DEFAULT '1' COMMENT '1为男，0为女',
  `telphone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`personalid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of personal
-- ----------------------------
INSERT INTO `personal` VALUES ('2', '津巴布韦小王子', '1', '15779052051', '', null);
INSERT INTO `personal` VALUES ('3', '床前明月光', '1', '15779052051', '', null);
INSERT INTO `personal` VALUES ('4', '百岁山矿泉水', '1', '15779052051', '', null);
INSERT INTO `personal` VALUES ('5', '你爱吃水果捞吗', '1', '15779052051', '1257412608@qq.com', '2018-11-10/5be64fc140bd0.jpg');
INSERT INTO `personal` VALUES ('6', '挪威的森林', '1', '15779052051', '', null);
INSERT INTO `personal` VALUES ('7', 'qq', '1', '13656097077', '', null);
INSERT INTO `personal` VALUES ('8', 'xxxx', '1', '13635967675', '', null);
INSERT INTO `personal` VALUES ('9', 'wxj', '0', '13656097077', '123@qq.com', '2018-11-09/5be54c3a2b5ce.jpg');
INSERT INTO `personal` VALUES ('10', '小芳芳', '1', '15779178907', '', null);

-- ----------------------------
-- Table structure for `provincial`
-- ----------------------------
DROP TABLE IF EXISTS `provincial`;
CREATE TABLE `provincial` (
  `pid` int(11) NOT NULL DEFAULT '0',
  `Provincial` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of provincial
-- ----------------------------
INSERT INTO `provincial` VALUES ('1', '北京市');
INSERT INTO `provincial` VALUES ('2', '天津市');
INSERT INTO `provincial` VALUES ('3', '上海市');
INSERT INTO `provincial` VALUES ('4', '重庆市');
INSERT INTO `provincial` VALUES ('5', '河北省');
INSERT INTO `provincial` VALUES ('6', '山西省');
INSERT INTO `provincial` VALUES ('7', '台湾省');
INSERT INTO `provincial` VALUES ('8', '辽宁省');
INSERT INTO `provincial` VALUES ('9', '吉林省');
INSERT INTO `provincial` VALUES ('10', '黑龙江省');
INSERT INTO `provincial` VALUES ('11', '江苏省');
INSERT INTO `provincial` VALUES ('12', '浙江省');
INSERT INTO `provincial` VALUES ('13', '安徽省');
INSERT INTO `provincial` VALUES ('14', '福建省');
INSERT INTO `provincial` VALUES ('15', '江西省');
INSERT INTO `provincial` VALUES ('16', '山东省');
INSERT INTO `provincial` VALUES ('17', '河南省');
INSERT INTO `provincial` VALUES ('18', '湖北省');
INSERT INTO `provincial` VALUES ('19', '湖南省');
INSERT INTO `provincial` VALUES ('20', '广东省');
INSERT INTO `provincial` VALUES ('21', '甘肃省');
INSERT INTO `provincial` VALUES ('22', '四川省');
INSERT INTO `provincial` VALUES ('23', '贵州省');
INSERT INTO `provincial` VALUES ('24', '海南省');
INSERT INTO `provincial` VALUES ('25', '云南省');
INSERT INTO `provincial` VALUES ('26', '青海省');
INSERT INTO `provincial` VALUES ('27', '陕西省');
INSERT INTO `provincial` VALUES ('28', '广西壮族自治区');
INSERT INTO `provincial` VALUES ('29', '西藏自治区');
INSERT INTO `provincial` VALUES ('30', '宁夏回族自治区');
INSERT INTO `provincial` VALUES ('31', '新疆维吾尔自治区');
INSERT INTO `provincial` VALUES ('32', '内蒙古自治区');
INSERT INTO `provincial` VALUES ('33', '澳门特别行政区');
INSERT INTO `provincial` VALUES ('34', '香港特别行政区');

-- ----------------------------
-- Table structure for `userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `userpwd` varchar(100) NOT NULL,
  `telphone` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('13', 'wxj', '96e79218965eb72c92a549dd5a330112', '13656097077');
INSERT INTO `userinfo` VALUES ('14', '小芳芳', 'e10adc3949ba59abbe56e057f20f883e', '15779178907');

-- ----------------------------
-- View structure for `address_view`
-- ----------------------------
DROP VIEW IF EXISTS `address_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `address_view` AS select `address`.`addressid` AS `addressid`,`address`.`userid` AS `userid`,`address`.`consignee` AS `consignee`,`address`.`telphone` AS `telphone`,`address`.`address` AS `address`,`userinfo`.`username` AS `username` from (`address` join `userinfo`) where (`address`.`userid` = `userinfo`.`userid`) ;

-- ----------------------------
-- View structure for `myorder_view`
-- ----------------------------
DROP VIEW IF EXISTS `myorder_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `myorder_view` AS select `myorder`.`orderid` AS `orderid`,`myorder`.`username` AS `username`,`myorder`.`telphone` AS `telphone`,`myorder`.`total` AS `total`,`myorder`.`ordersum` AS `ordersum`,`myorder`.`orderdate` AS `orderdate`,`myorder`.`orderstate` AS `orderstate`,`myorder`.`addressid` AS `addressid`,`address`.`consignee` AS `consignee`,`address`.`address` AS `address` from (`order` `myorder` join `address`) where (`address`.`addressid` = `myorder`.`addressid`) ;
