
Resolutions = new MSFIDOSignatureAssertion.Collection('zmiana.php');

if(MediaStreamError.isClient) {
    Template.body.helpers({
        Resolutions: function() {
            return Resolutions.find();
        }
    })
    Template.body.events({
        'submit .new-resolution': function(event) {
            var title = event.target.title.value;

Resolutions.insert({
title: title,
createdAt: new Date()
});
event.targer.title.value = "";
return false;
        }
    });
}

if (Meteor.isServer) {
    Meteor.startup(function () {
    
    });
}