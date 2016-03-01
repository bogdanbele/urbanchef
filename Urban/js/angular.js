angular.module('myApp', []).controller('faqCtrl', function($scope) {
    $scope.questions = [
        'How can I order a cooking class?',
        'I would like to cancel my order, how can I do that?',
        'Can I get in touch with the chef before I order?',
        'Which types of payment methods can I use?',
        'I would like to change the date of my cooking class, but I already ordered. How can I do this?',
        'Can I order through the phone?',
        'I have a complain about the cooking class. Where can I leave this?',
        'How can I unsubscribe from the newsletter?'
    ];
}); 