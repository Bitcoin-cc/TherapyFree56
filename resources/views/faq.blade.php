@extends('layouts.app')

@section('content')
<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Create an FAQ Page with Show and Hide Questions and Answers using jQuery</title>
  
  <!-- jQuery -->
  <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <script>
 $(document).ready(function() {
 
    $('.faq_question').click(function() {
 
        if ($(this).parent().is('.open')){
            $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
            $(this).closest('.faq').removeClass('open');
 
            }else{
                var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                $(this).closest('.faq').addClass('open');
            }
    });
});
</script>
  
<!-- CSS -->
<style>
 
/*FAQS*/
.faq_question {
    margin: 0px;
    padding: 0px 0px 5px 0px;
    display: inline-block;
    cursor: pointer;
    font-weight: bold;
    font-size: 40px;
}
 
.faq_answer_container {
    height: 0px;
    overflow: hidden;
    padding: 0px;
    
}

.faq_answer{
   margin: 0px;
    padding: 0px 0px 5px 0px;
    display: inline-block;
    cursor: pointer;
    font-weight: bold;
    font-size: 25px;
    
}

</style>
  
</head>
  <body>

   <!-- HTML -->
   <div class="faq_container">
    <div class="faq">
       <div class="faq_question">What is BitTherapy ?</div>
            <div class="faq_answer_container">
               <div class="faq_answer">Bit Therapy Is a Website that Helps people with Mental Issues to seek out Proffessional Help From The Doctors  </div>
            </div>           
     </div>
  </div>

  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <div class="faq_container">
    <div class="faq">
       <div class="faq_question">How Can I Connect With A Doctor ?</div>
      
            <div class="faq_answer_container">
               <div class="faq_answer">You Can Log In First And then you'll see a page at the Navigation bar above  you'll see your name as well you can register click there and you'll find Connect With a Doctor Page</div>
            </div>      
            
     </div>
  </div>
  <p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
  <div class="faq_container">
    <div class="faq">
       <div class="faq_question">How long does it usually take for the Doctor Reply ?</div>
      
            <div class="faq_answer_container">
               <div class="faq_answer">It Depends Since for Each Doctor has his own Schedule and based upon that The Doctor Will Reply  </div>
            </div>      
            
     </div>
  </div>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <div class="faq_container">
    <div class="faq">
       <div class="faq_question">How Accurate is the Questionnaire in This Website ?</div>
      
            <div class="faq_answer_container">
               <div class="faq_answer">The Questionnaire was Made By Specialist Doctors Who Has experience Working With Mental Illnesses</div>
            </div>      
            
     </div>
  </div>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
  <div class="faq_container">
    <div class="faq">
       <div class="faq_question">How Much Do The Doctor Ask for A payment ?</div>
      
            <div class="faq_answer_container">
               <div class="faq_answer">it depends doctors with more experience will ask for more than doctors with less experience </div>
            </div>      
            
     </div>
  </div>



 </body>
</html>
@endsection