mysite = angular.module('mysite', []);

var controllers = {};

controllers.portfolio = function($scope, $http) {
	// $scope.projects = [
	// 	{
	// 		order: 1,
	// 		projects: 'commercial',
	// 		name: 'Goweb Hosting Solution',
	// 		desc: 'Main website, Product catalog.',
	// 		type: 'Drupal 7',
	// 		screenshot: 'image/test2.png',
	// 		url: 'http://www.gowebhosting.ph/'
	// 	},
	// 	{
	// 		order: 2,
	// 		projects: 'commercial',
	// 		name: 'Goweb Hosting Billing',
	// 		desc: 'Portal, Web Hosting Management, Billing',
	// 		type: 'WHMCS, bootstrap',
	// 		screenshot: 'image/test3.png',
	// 		url: 'http://portal.gowebhosting.ph/domainchecker.php'
	// 	},
	// 	{
	// 		order: 3,
	// 		projects: 'commercial',
	// 		name: 'Goweb Hosting Design',
	// 		desc: 'Goweb Portfolio, Free design, Design',
	// 		type: 'Codeigniter, Zurb',
	// 		screenshot: 'image/test4.png',
	// 		url: 'http://portal.gowebhosting.ph/domainchecker.php',

	// 	},
	// 	{
	// 		order: 4,
	// 		projects: 'commercial',
	// 		name: 'Hijo Resources',
	// 		desc: 'Content Management',
	// 		type: 'Dreamweaver, php, js',
	// 		screenshot: 'image/test5.png',
	// 		url: 'http://www.hijoresources.net/'
	// 	},
	// 	{
	// 		order: 5,
	// 		projects: 'commercial',
	// 		name: 'Planet Gadget',
	// 		desc: 'CMS, Ecommerse,  Product Catalog',
	// 		type: 'Joomla',
	// 		screenshot: 'image/test6.png',
	// 		url: 'http://www.planetgadgetph.com/'
	// 	},
	// 	{
	// 		order: 6,
	// 		projects: 'commercial',
	// 		name: 'We design, We shoot',
	// 		desc: 'Product Catalog',
	// 		type: 'PHP, JS, HTML, CSS',
	// 		screenshot: 'image/test7.png',
	// 		url: 'http://wedesignweshoot.com/'
	// 	},
	// 	{
	// 		order: 7,
	// 		projects: 'commercial',
	// 		name: 'LMCGLAW',
	// 		desc: 'N/A',
	// 		type: 'PHP, JS, HTML, CSS',
	// 		screenshot: 'image/lmcg-law.png',
	// 		url: 'http://lmcglaw.com/'
	// 	},
	// 	{
	// 		order: 8,
	// 		projects: 'commercial',
	// 		name: 'Mercury Drug Store',
	// 		desc: 'Product Catalog, Store Locator, Inquiries page',
	// 		type: 'JS, HTML, CSS',
	// 		screenshot: 'image/mercury-drug-store.png',
	// 		url: 'https://www.mercurydrug.com/index.html'
	// 	},
	// 	{
	// 		order: 9,
	// 		name: 'Abby Golf- Abby Arevalo',
	// 		desc: 'Personal Profile, Archive, Gallery',
	// 		type: 'Wordpress Theming, Wordpress Development',
	// 		screenshot: 'image/abby2.png',
	// 		url: 'http://abby-golf.com/stagging/',
	// 	},
	// 	{
	// 		order: 10,
	// 		projects: 'commercial',
	// 		name: 'Marc Dios Ababa',
	// 		desc: 'Product Catalog, Blog',
	// 		type: 'Joomla',
	// 		screenshot: 'image/marcdiosababa.png',
	// 		url: 'http://marcdiosababa.com/stagging'
	// 	},
	// 	{
	// 		order: 11,
	// 		projects: 'commercial',
	// 		name: 'Waterfront contailer',
	// 		desc: 'Product Catalog',
	// 		type: 'Wordpress Theming, Plugin, Development',
	// 		screenshot: 'image/test1.png',
	// 		url: 'http://waterfrontcontainer.ph/'
	// 	},
	// 	{
	// 		order: 12,
	// 		projects: 'studies',
	// 		name: 'DDG - Magazine [UNFINISH]',
	// 		desc: 'Product Catalog, Blog, archieve',
	// 		type: 'PSD TO HTML / static / stagging',
	// 		screenshot: 'image/ddg-mag.png',
	// 		url: 'http://digimarketing.github.io/DDG-magazine/'
	// 	},
	// 	{
	// 		order: 13,
	// 		name: 'Double Dragon Properties',
	// 		desc: 'N/A',
	// 		type: 'Wordpress Plugin',
	// 		screenshot: 'image/doubledragon.png',
	// 		url: 'http://doubledragon.com.ph/'
	// 	},
	// 	{
	// 		order: 14,
	// 		name: 'Mrs. Fields',
	// 		desc: 'Product Catalog, Store Locator, Plugins',
	// 		type: 'Wordpress Plugin, Wordpress Theming',
	// 		screenshot: 'image/mrsfields.png',
	// 		url: 'http://mrsfields.com.ph/'
	// 	}
	// ];

	$http.get('main/jsonprojects').success(function(data) {
		// console.log(data);

		$scope.projects = data;
	});

}

mysite.controller(controllers);