$(document).ready(function()
{
$('.header').hover(function(){
$('.panel').show();
});
$('#container').hover(function()
{
$('.panel').hide();
});
$('#login1').hover(function(){
$('#login1').css('background-color','grey');
},function(){$('#login1').css('background-color','white');});
$('#logo1').hover(function(){
$('#logo1').css('background-color','grey');
},function(){$('#logo1').css('background-color','white');});
$('#subjects1').hover(function(){
$('#subjects1').css('background-color','grey');
},function(){$('#subjects1').css('background-color','white');});
$('#about').hover(function(){
$('#about').css('background-color','grey');
},function(){$('#about').css('background-color','white');});
$('#notif').hover(function(){
$('#notif').css('background-color','grey');
},function(){$('#notif').css('background-color','white');});
$('#signup1').hover(function(){
$('#signup1').css('background-color','grey');
},function(){$('#signup1').css('background-color','white');});
$('#subjects1').click(function(){
$('.subindex').show();
});
$('#container').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});
$('.content').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});
$('#logo1').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});
$('#about').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});
$('#search').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});
$('#notif').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});
$('#login1').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});
$('#signup1').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});

$('.profile').mouseover(function(){
$('.subindex').slideUp();
$('.subdesc').slideUp();
});

$('#home').hover(function(){
$('#home').css('background-color','grey');
$('#home').css('color','black');
},function(){$('#home').css('background-color','white');
$('#home').css('color','grey');});

$('#home').hover(function(){
$('.subdesc').hide();
});


$('#db').hover(function(){
$('#db').css('background-color','grey');
$('#db').css('color','black');
},function(){$('#db').css('background-color','white');
$('#db').css('color','grey');});

$('#db').hover(function(){
$('.subdesc').css("background-color","maroon");
$('.subdesc').css("color","white");
$('.subdesc').html('<h3> > Query Languages</h3><h5>Many querying languages are available like Sql to manipulate data stored i the dataase. </h5><br><h3> > Query Optimisation</h3><h5>Techniques to convert the queries into equivalent optimised queries which take lesser time to execute and lesser memory space.</h5><br>');
$('.subdesc').show();
});

$('#wd').hover(function(){
$('#wd').css('background-color','grey');
$('#wd').css('color','black');
},function(){$('#wd').css('background-color','white');
$('#wd').css('color','grey');});

$('#wd').hover(function(){
$('.subdesc').css("background-color","green");
$('.subdesc').css("color","white");
$('.subdesc').html('<h3> > RWD</h3><h5>In case you havent heard, we are calling Responsive Web Design RWD now. As one of the leading solutions for opening the web up to be optimized for as many devices as possible without creating custom sites for each, it is the trending topic in the field of web development. </h5><br><h3> > SVG</h3><h5>Apple has decided that the future of computing is one with better resolution. Apple is pushing out Retina displays across its entire iOS line and other major device manufacturers are already figuring out how they’re going to match or beat this technology.For web designers, they have to design for tons of different screen sizes with major shifts in pixel density. Higher resolution images brings up all kinds of issues with file size, how and when to serve different images to different devices, etc.</h5><br><h3> > CS6</h3><h5>Awesome new features include a revamped interface (dark is an option now), Type Styles similar to the paragraph styles in Illustrator and InDesign, a Blur Gallery that makes depth of field and tilt shift simulation much easier, a rethought crop tool, layer searching, layer group masks and a lot more. Don’t even bother resisting, you know you want it.</h5>');
$('.subdesc').show();
});

$('#bd').hover(function(){
$('#bd').css('background-color','grey');
$('#bd').css('color','black');
},function(){$('#bd').css('background-color','white');
$('#bd').css('color','grey');});

$('#bd').hover(function(){
$('.subdesc').css("background-color","orange");
$('.subdesc').css("color","white");
$('.subdesc').html('<h3> > Improving Data analytic techniques</h3><h5> Gather all datas,filter them out on certain constraints and use them to take confident decisions. </h5><br><h3> > Natural Language Processing methods </h3><h5>Use NL-processing techniques on Big Datas to find out the current sentimental trend and it can be used on business,politics,finance ...etc</h5><br><h3> > Better datamining techniques</h3><h5>Data mining is the method to grab datas from various platforms.Improved distributed crawling techniques and algorithms are need for scrape datas from multiple platforms.</h5>');
$('.subdesc').show();
});

$('#cc').hover(function(){
$('#cc').css('background-color','grey');
$('#cc').css('color','black');
},function(){$('#cc').css('background-color','white');
$('#cc').css('color','grey');});

$('#cc').hover(function(){
$('.subdesc').css("background-color","purple");
$('.subdesc').css("color","white");
$('.subdesc').html('<h3> > Security</h3><h5>Cloud security issues and the risks of cloud computing are not well understood today and are one of the biggest barriers to adoption of these services. This section helps to assess the security risks of cloud computing with the latest information on cloud security standards; how to manage data security in the cloud, data privacy in the cloud and the regulatory and compliance implications of moving to a cloud model. This topic also covers auditing cloud computing service providers and cloud computing risk management</h5><br><h3> > Development</h3><h5>Discover how cloud computing development platforms let you fire up and test the upper limits of an application in minutes and shut it down just as fast. This section covers all the latest information on developing apps in the cloud, test and development in the cloud, technical advice on writing code in the cloud, cloud APIs and platform as a service. This topic covers Microsoft Windows Azure, workflow for development in the cloud, AWS, EC2, Google App Engine, application performance testing in the cloud, Hadoop, open source cloud and Eucalyptus.</h5><br><h3> > Applications</h3><h5>Cloud applications allow companies to eliminate the need to install, run and maintain an application in house by outsourcing it to an application provider in the cloud. The most well known of these providers today is Salesforce.com which sells CRM software as a service. Read news and technical advice on application compatibility in the cloud and the pros and cons of using cloud-based applications. This topic covers enterprise applications, productivity applications, custom applications, collaboration, Gmail, SlideRocket.com and Google Apps. </h5>');
$('.subdesc').show();
});

$('#bi').hover(function(){
$('#bi').css('background-color','grey');
$('#bi').css('color','black');
},function(){$('#bi').css('background-color','white');
$('#bi').css('color','grey');});

$('#bi').hover(function(){
$('.subdesc').css("background-color","magenta");
$('.subdesc').css("color","white");
$('.subdesc').html('<h3> > BI Technology</h3><h5>Get the latest information about enterprise business intelligence technology and platforms, including news on the latest business intelligence (BI) software, tools and applications, plus articles on business intelligence strategy and market trends with insight from industry experts. Learn how business intelligence vendors are reacting to the ever-changing industry with updates to their business intelligence product suites, and read news and articles on Oracle business intelligence platforms, SAP business intelligence platforms, Microsoft business intelligence platforms and IBM business intelligence platforms. Read about business intelligence case studies, fundamentals and best practices, find out how business intelligence relates to other disciplines and learn the advantages of business intelligence.</h5><br><h3> > BI Management</h3><h5>Get comprehensive information on business intelligence management, including news and news analysis stories, case studies, expert tips and more. Learn about important BI management issues that can determine the success or failure of business intelligence projects, including business intelligence strategy, best practices and project management. </h5><br><h3> > Data visualization </h3><h5>Data visualization tools, such as data mashups, executive dashboards, performance scorecards and other data visualization technology, are becoming more popular among enterprises. Here you’ll find the latest news and articles on data visualization software, learn about techniques, strategies and best practices, and read about emerging trends in the data visualization market. </h5>');
$('.subdesc').show();
});

$('#da').hover(function(){
$('#da').css('background-color','grey');
$('#da').css('color','black');
},function(){$('#da').css('background-color','white');
$('#da').css('color','grey');});

$('#da').hover(function(){
$('.subdesc').css("background-color","brown");
$('.subdesc').css("color","white");
$('.subdesc').html('<h3> > Data Analytics in the Cloud</h3><h5> an increasing number of technologies are available for processing data in the cloud.Examples include Amazon’s Redshift hosted BI data warehouse, Google’s BigQuery data analytics service, IBM’s Bluemix cloud platform and Amazon’s Kinesis data processing service. </h5><br><h3> > Hadoop: The new enterprise data operating system </h3><h5>Distributed analytic frameworks, such as MapReduce, are evolving into distributed resource managers that are gradually turning Hadoop into a general-purpose data operating system.</h5><br><h3> > Big data lakes</h3><h5>A data lake, also called an enterprise data lake or enterprise data hub provides tools for people to analyze the data, along with a high-level definition of what data exists in the lake.</h5>');
$('.subdesc').show();
});


$('#signup1').click(function(){
alert("Before signing up, make sure that you have made the payment in 'Make Payment' section and have the transaction id.");
$('.c').fadeIn();
$('.popup').fadeIn();
});

$('#close').click(function(){
$('.c').fadeOut();
$('.popup1').fadeOut();
$('.popup').fadeOut();
});

$('#close1').click(function(){
$('.c').fadeOut();
$('.popup').fadeOut();
});

$('#h2').hover(function(){
$('#h2').css("border-bottom","2px solid green");
},function(){$('#h2').css("border-bottom","none");});

$('#h2').hover(function(){
$('.h20').slideToggle();
});

$('#h21').hover(function(){
$('#h21').css("color","green");
},function(){$('#h21').css("color","black");});

$('#h22').hover(function(){
$('#h22').css("color","green");
},function(){$('#h22').css("color","black");});

$('#h7').hover(function(){
$('.h70').slideToggle();
});

$('#h71').hover(function(){
$('#h71').css("color","green");
},function(){$('#h71').css("color","black");});

$('#h72').hover(function(){
$('#h72').css("color","green");
},function(){$('#h72').css("color","black");});

$('#h71').click(function(){
$('.popup').show();
$('.c').show();
});

$('#h3').hover(function(){
$('#h3').css("border-bottom","2px solid green");
},function(){$('#h3').css("border-bottom","none");});

$('#h4').hover(function(){
$('#h4').css("border-bottom","2px solid green");
},function(){$('#h4').css("border-bottom","none");});

$('#h5').hover(function(){
$('#h5').css("border-bottom","2px solid green");
},function(){$('#h5').css("border-bottom","none");});

$('#h1').hover(function(){
$('#h1').css("border-bottom","2px solid green");
},function(){$('#h1').css("border-bottom","none");});

$('#h6').hover(function(){
$('#h6').css("border-bottom","2px solid green");
},function(){$('#h6').css("border-bottom","none");});

$('#h7').hover(function(){
$('#h7').css("border-bottom","2px solid green");
},function(){$('#h7').css("border-bottom","none");});

$('#h2').click(function(){
$('.des').html('');
dataString="email="+email;
$.ajax({
url: "es.php",
type: "POST",
data: dataString
})
.done(function(result){
$('.v').html('');
$('.des').show();
$('.des').html("<h1 style='padding:15px'>AVAILABLE SUBJECTS</h1><br>"+result);
});
});

$('#h3').hover(function(){
$('#h30').slideToggle();
});

$('#h72').click(function(){
$.ajax
({
url: "destroy.php"
});
window.location.replace('login.php');
});
$('#bu1').click(function(){
$('#v2').hide();
$('#v3').hide();
$('#v4').hide();
$('#v1').show();
});
$('#bu2').click(function(){
$('#v1').hide();
$('#v3').hide();
$('#v4').hide();
$('#v2').show();
});
$('#bu3').click(function(){
$('#v1').hide();
$('#v2').hide();
$('#v4').hide();
$('#v3').show();
});
$('#bu4').click(function(){
$('#v1').hide();
$('#v2').hide();
$('#v3').hide();
$('#v4').show();
});

$('#exit').click(function(){
window.location.replace('admin.php');
});

$('.se').keydown(function(){
var search= $('.se').val();
if(search.length>0){
dataString="search="+search;
$.ajax({
type:"POST",
url:"search.php",
data: dataString,
})
.done(function(result){
$('.result').show();
$('.result').html(result);
});
}
});

$('.result').click(function(){
alert('please login to view the topic.');
});

$('.result').mouseleave(function(){
$('.result').hide();
});

$('.b1').click(function(){
window.location.href='login.php';
});

$('#b2').click(function(){
$('.c').fadeIn();
$('.popup').fadeIn();
});

$('#b3').click(function(){
window.location.href='about.php';
});

$('#ca').click(function(){
$('.c').fadeIn();
$('.popup').fadeIn();
});

$('#fp').click(function(){
$('.c').fadeIn();
$('.pass').fadeIn();
});

$('#r').click(function(){
$('.c').fadeIn();
$('.reply').fadeIn();
});

$('#a7').hover(function(){
$('.a70').slideDown();
});

$('#a71').hover(function(){
$('#a71').css("color","green");
},function(){$('#a71').css("color","black");});

$('#a72').hover(function(){
$('#a72').css("color","green");
},function(){$('ah72').css("color","black");});

$('#a71').click(function(){
$('.popup').show();
$('.c').show();
});

$('#a72').click(function(){
window.location.replace('login.php');
$.ajax
({
url: "destroy.php"
});
});
$('.ad7').hover(function(){
$('#ad71').show();
$('#ad72').show();
});

$('#ad71').click(function(){
$('.popup').show();
$('.c').show();
});

$('#notif').click(function(){
$('.c').fadeIn();
$('.popup1').fadeIn();
});

$('.subindex').mouseleave(function(){
$('.subindex').hide();
$('.subdesc').hide();
});
});
