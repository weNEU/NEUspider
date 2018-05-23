# NEUAAOspider
NEU AAO web spider using PHP.
# 项目说明
## 开启此项目的目的
- 作为“we东大”微信小程序服务器端核心代码
- 学习PHP，为智慧旅游项目开发做准备
- 假装预习过JSP
## 预期爬取
  - [东北大学教务处](https://aao.neu.edu.cn/)
  
  - [东北大学图书馆](http://www.lib.neu.edu.cn/index.html)
  
  - [东北大学校园卡服务中心](http://ecard.neu.edu.cn/)
  
  - [东北大学新闻网等资讯网站](http://neunews.neu.edu.cn/campus/)
# 更新日志
## v1.1
### 18-5-24
#### 版本简介
新增查询本学期成绩  
#### 新特性  
- 高度重用之前的代码  
#### 接下来
已经成功连通了we东大！we东大小程序预期在六月中旬正式上线！    
赶了一堆ddl，接下来要忙四门期末考试，加油啦！     

下一步预计要完成的是爬取图书馆馆藏图书功能    

## v1.0
### 18-5-19
#### 版本简介
爬取学期课表/本周课表/今日课表 
#### 新特性
- 根据实际需要，并非显式地传递账号密码，所以改用get方式  
- 为了减轻客户端处理量，json以中文传递
- 删除了textview等预览信息，运行后只展示json结果
- 优化了cookie的存储方式，自动清除缓存  
- 优化代码结构
#### 接下来
正在完成和we东大小程序的客户端连通工作，敬请期待   
近日学习任务繁重，为了圆我一个数值分析拿**A**的梦想，推迟几天完成成绩爬取   

## v0.1
### 18-5-13  
#### 版本简介
成功模拟登陆教务处。    
#### 新特性
- 成功模拟登陆NEU教务处  
- 不再使用百度OCR API   
#### 接下来
利用正则提取课程信息  
