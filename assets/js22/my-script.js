jQuery(document).ready(function($) {
    
    let pgid = my_script_vars.postID;
    if (pgid == '14'){
        $("#nave").attr("data-style" , "dark");
        $("#nave").attr("data-position" , "absolute"); 
    }else{
        $("#nave").attr("data-style" , "light");
        $("#nave").attr("data-position" , "relative"); 
    }
});



// Get the current year
const currentYear = new Date().getFullYear();

// Get the year of the specific date (e.g., 2023)
const specificYear = 2023; // Change this to the year you want to compare with

// Select the span element
const spanElement = document.getElementById('number');

if (spanElement) {
    
    // Get the current value of the span element
    let currentValue = parseInt(spanElement.textContent);
    
    // Check if the current year is greater than the specific year
    if (currentYear > specificYear) {
        // Increment the value by the difference in years
        currentValue += (currentYear - specificYear);
        
        // Update the content of the span element
        spanElement.textContent = currentValue;
    }
} else {
    console.log('keep going')
}