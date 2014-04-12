<div class="the_content" data-ng-controller="portfolio">
	<div class="searchfilterwrapper">
		Search : <input type="text" data-ng-model="filter" placeholder="Project Name">
	</div>
	<div class="view view-first" data-ng-repeat="portfolio in projects | filter:filter:name">  
		<img src="{{ portfolio.screenshot }}" />  
		<div class="mask">  
		<h2>{{ portfolio.name }}</h2>  
		<p>{{ portfolio.desc }}<br>{{ portfolio.type }}</p>  
		 <a href="{{ portfolio.url }}" class="info" target="_blank">Visit Site</a>  
		</div>  
	</div>
</div>