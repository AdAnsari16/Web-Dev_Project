@extends('layouts.app')

@section('content')
<div class="container-fluid" >
<div class="row">
	<div class="col-md-8">
		<h2>WHYYYY    YYOGAAAAA!!!!!!!</h2>
	<p class="text-justify">
		Yoga has come a long way in the past few years. Take a look at any studio’s schedule and you’ll see so many different types of yoga, from ashtanga yoga and kundalini yoga to aerial yoga and acro yoga. You might have even heard about — or tried — some of the more modern and unusual iterations of the ancient practice: hip-hop yoga, HIIT yoga, and naked yoga…just to name a few.<br>

	Yoga practice is thousands of years old. However, it only arrived in the US in the late 1800s and only firmly took root within the last few decades. Since then, yoga has gone from a practice associated with hippies, to one that’s practiced by nearly 37 million people.<br>

	And not all of these millions of people go to a yoga studio to do their downward dogs. If you like to unroll your mat at home (like with Beachbody Yoga Studio) you’re not alone: That’s the number one place people practice.<br>
	Developed in India, yoga is a spiritual practice that has been evolving for the last 5,000 years or so. The original yogis were reacting, in part, to India's ancient Vedic religion, which emphasized rituals. The yogis wanted a direct spiritual experience -- one on one -- not symbolic ritual. So they developed yoga.
Yoga means "union" in Sanskrit, the classical language of India.
</div>
<div class="col-md-4 col-lg-3 col-sm-6">
		<img src="/img/yog1.jpg" height="340" width="500">

</div>
<div class="container-fluid" >
<div class="row">
<div class="col-md-6">
		<img src="/img/yog2.jpg" height="340" width="500">

</div>
	<div class="col-md-6">
    <h2>WHY DO YOGA......????</h2>
<p class="text-justify">
	The short answer is that yoga makes you feel better. Practicing the postures, breathing exercises and meditation makes you healthier in body, mind and spirit. Yoga lets you tune in, chill out, shape up -- all at the same time.<br>

	For many people, that's enough of an answer. But there's more if you're interested.<br>
	For starters, yoga is good for what ails you. Specifically, research shows that yoga helps manage or control anxiety, arthritis, asthma, back pain, blood pressure, carpal tunnel syndrome, chronic fatigue, depression, diabetes, epilepsy, headaches, heart disease, multiple sclerosis, stress and other conditions and diseases. What's more, yoga:<br>

	# Improves muscle tone, flexibility, strength and stamina<br>
	# Reduces stress and tension<br>
	# Boosts self esteem<br>
	# Improves concentration and creativity<br>
	# Lowers fat<br>
	# Improves circulation<br>
	# Stimulates the immune system<br>
	#Creates sense of well being and calm.
</p>
</div>


	<div class="col-sm-4">
		<h1>TYPES OF YOGA</h1>
  
        <li class="nav-item{{Request::is('hatha') ? ' active' : ''}}">
          <a class="nav-link" href="/hatha">Hatha Yoga</a>
        </li>
        <li class="nav-item{{Request::is('vin') ? ' active' : ''}}">
          <a class="nav-link" href="/vin">Vinyasa Yoga</a>
        </li>
        <li class="nav-item{{Request::is('power') ? ' active' : ''}}">
          <a class="nav-link" href="/power">Power Yoga</a>
        </li>
    </div>
 
		<div class="col-sm-4">
		<h2>DON'TS OF YOGA PRACTICE</h2>
		<p>1.Yoga should not be performed in a state of exhaustion, illness, in a hurry or in an acute stress conditions. <br>

2.Women should refrain from regular yoga practice especially asanas during their menses. Relaxation techniques and pranayama can be done instead. <br>

3.Don’t perform yoga immediately after meals. Wait until 2 to 3 hours after a large meal.<BR>
	4.Don’t shower or drink water or eat food for 30 minutes after doing yoga.<BR>

5.During illness, surgeries, or any sprains or fractures, one should refrain from Yoga Practice. They can resume yoga after consulting experts.<br>

6.Don’t do strenuous exercises after yoga.
</p>

	</div>
	<div class="col-sm-4">
		<h2>BENEFITS OF YOGA</h2>
		<p>*increased flexibility*<br>
*increased muscle strength and tone*<br>
*improved respiration, energy and vitality*<br>
*maintaining a balanced metabolism*<br>
*weight reduction*<br>
*cardio and circulatory health*<br>
*improved athletic performance*<br>
*protection from injury*</p>

	</div>
</div>
@endsection