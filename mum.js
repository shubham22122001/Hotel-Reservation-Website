var head1 = document.querySelector("#h");
var head2 = document.querySelector("#h2");
function myFunction(heading){
    heading.style.backgroundColor="white";
    heading.style.color="rgb(182, 25, 182)";
    heading.style.borderColor = "rgb(182, 25, 182)";
    heading.style.boxShadow = "0 4px 8px 0 violet";
    
}

function myFunction2(heading){
    heading.style.backgroundColor="rgb(182, 25, 182)";
    heading.style.color="white";
    heading.style.borderColor = "white";
    heading.style.boxShadow = "0 4px 8px 0 white";


    
}
head1.addEventListener('mouseover', function(){ myFunction(head1); })
head1.addEventListener('mouseout', function(){ myFunction2(head1); })

head2.addEventListener('mouseover', function(){ myFunction(head2); })
head2.addEventListener('mouseout', function(){ myFunction2(head2); })