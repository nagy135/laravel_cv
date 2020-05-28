require('./bootstrap');

$(document).ready(function(){
    $('#add_school').on('click', function(e){
        e.preventDefault();
        var schools = $('.school');
        var new_school = $(schools[0]).clone();
        new_school.find('input').val("");
        $(schools[schools.length - 1]).after(new_school);
    });
    $('#add_course').on('click', function(e){
        e.preventDefault();
        var courses = $('.course');
        var new_course = $(courses[0]).clone();
        new_course.find('input').val("");
        $(courses[courses.length - 1]).after(new_course);
    });
});
