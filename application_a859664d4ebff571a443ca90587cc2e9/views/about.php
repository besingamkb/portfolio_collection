<div class="the_content aboutme" data-ng-controller="aboutme">
	<div class="separator">
		<h1>{{ objectiveTitle }}</h1>
		<p>{{ objective }}</p>
	</div>
	<div class="separator">
		<h1>{{educationName}}</h1>
		<ul>
			<li class="edulevel" data-ng-repeat="edu in education">{{ edu.level }}
				<ul>
					<li>{{ edu.schoolname }}</li>
					<li>{{ edu.address }}</li>
					<li>{{ edu.year }}</li>
					<li>{{ edu.course }}</li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="separator">
		<h1>{{skill}}</h1>
		<div class="skill">
			<?php for ($i = 0; $i < 10; $i++):?>
			<div class="skills">
				<div class="skillstitle">
					<h3>{{ skills[<?php echo $i ?>]['name'] }}</h3>
					<span>{{ skills[<?php echo $i ?>]['desc'] }}</span>
				</div>
				<div class="skillsitems">
					<ul>
						<li>1</li>
						<li>1</li>
						<li>1</li>
						<li>1</li>
						<li>1</li>
						<li>1</li>
						<li>1</li>
					</ul>
				</div>
			</div>
			<?php endfor; ?>
		</div>
		
		<div class="clearfloat"></div>
	</div>
</div>