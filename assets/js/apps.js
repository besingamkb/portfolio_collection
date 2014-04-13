mysite = angular.module('mysite', []);




var controllers = {};

controllers.portfolio = function($scope, $http) {
	

	$http.get('main/jsonprojects').success(function(data) {
		// console.log(data);

		$scope.projects = data;
	});

}

controllers.aboutme = function($scope, $http) {

	// blackstar &#9733
	// whitestar &#9734




	$scope.objectiveTitle = "Objectives";
	$scope.objective = "Seeking for a prospective career programming field that utilize my skills and education.";

	// education

	$scope.educationName = "Education";
	$scope.education = [
		{
			order: 1,
			level: 'College',
			schoolname: 'Infotech Institure of Arts and Sciences',
			address: 'Mandaluyong City',
			course: 'Computer Science (NCIV)',
			year: '2010-2012'
		},
		{
			order: 2,
			level: 'Highschool',
			schoolname: 'Caluya National Highschool',
			address: 'Poblacion, Caluya isl., Antique',
			year: '2006-2009'
		},
		{
			order: 3,
			level: 'Elementary',
			schoolname: 'Divine Word School of Semirara Island Inc.',
			address: 'Semirara Isl, Caluya, Antique',
			year: '1999-2005'
		}
	];

	//skill

	$scope.skill = "Skills";

	$scope.skills = [
		{ 
			name: 'php',
			desc: 'is a server-side scripting language designed for web development but also used as a general-purpose programming language.' 
		},
		{ 
			name: 'html/css',
			desc: 'are two of the core technologies for building Web pages.'
		},
		{ 
			name: 'javascript',
			desc: 'is commonly used as part of web browsers, whose implementations allow client-side scripts to interact with the user, control the browser, communicate asynchronously, and alter the document content that is displayed.'
		},
		{ 
			name: 'cms',
			desc: 'is a computer program that allows publishing, editing and modifying content as well as maintenance from a central interface.' 
		},
		{ 
			name: 'database',
			desc: 'is an organized collection of data.'
		},
		{ 
			name: 'adobe',
			desc: 'a series of software suites of graphic design, video editing, and web development applications made or acquired by Adobe Systems.'
		},
		{ 
			name: 'microsoft office',
			desc: 'is an office suite of desktop applications, servers and services for the Microsoft Windows and OS X operating systems.' 
		},
		{ 
			name: 'web server' 
		},
		{ 
			name: 'operating system'
		},
		{ 
			name: 'other' 
		}
	];

}

mysite.controller(controllers);
