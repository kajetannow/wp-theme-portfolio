const section = document.getElementsByTagName('section');
const left = document.getElementById('leftSlider');
const right = document.getElementById('rightSlider');
var l = section.length;
var i = 0;
section[i].style.opacity = 1;
    var sliderBack = function(){
        console.log('lewy');
        section[i].style.animationName = 'sectionOutLeft';
        section[i].style.animationPlayState = 'running';
        
        if(i===0)
            i=l-1;
        else
            i--;

        section[i].style.animationName = 'sectionInLeft';
        section[i].style.animationPlayState = 'running';
        
       
        
    }

    var sliderForward = function(){
        section[i].style.animationName = 'sectionOutRight';
        section[i].style.animationPlayState = 'running';
        
       
        if(i===(l-1))
            i=0;
        else
            i++;

        section[i].style.animationName = 'sectionInRight';
        section[i].style.animationPlayState = 'running';
        
        
    }

    left.addEventListener('click', sliderBack);
    right.addEventListener('click', sliderForward);
if(left || right){
    setInterval(sliderForward, 7000);
}




/*
//ukrywanie opisu
const img = document.getElementsByClassName('wp-post-image');
const descript = document.getElementsByClassName('descript');
var isDescriptHidden = false;

var hideDescript = function(){
    if(isDescriptHidden === true){
        console.log('ukrywam');
        this.style.animationName = 'descriptIn';
        this.style.animationPlayState = 'running';
        isDescriptHidden = false;
    }
    else{
        console.log('odkrywam');
        this.style.animationName = 'descriptOut';
        this.style.animationPlayState = 'running';
        isDescriptHidden = true;
        
    }
}


for(var j=0, le=descript.length; j<l; j++){
    descript[j].addEventListener('click', hideDescript);
}
*/
