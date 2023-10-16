<script lang="ts">


import { name,jobtitle, location, notes } from '$lib/stores/inputStore';
    import { task1, start1, finish1} from '$lib/stores/inputStore';
    import { task2, start2, finish2} from '$lib/stores/inputStore';
    import { task3, start3, finish3} from '$lib/stores/inputStore';

import P5 from 'p5-svelte';
import img from '$lib/images/pow.png';
import { parse, differenceInHours} from 'date-fns';

let canvas:any;
let ok = true;
let pic:ImageData;

let myValue = '';



class TimeCalculator {
  constructor(private start: string, private finish: string) {
    this.start = start;
    this.finish = finish;
  }

  calculateTotalHours() {
    const parsedTime = parse(this.start, 'h a', new Date());
    const parsedTime2 = parse(this.finish, 'h a', new Date());
    const totalHours = differenceInHours(parsedTime2, parsedTime);

    // Check if totalHours is NaN, and return either totalHours or an empty string
    const result = isNaN(totalHours) ? '' : totalHours;

    return result;
  }
}

const Total1 = new TimeCalculator($start1, $finish1).calculateTotalHours();
const Total2 = new TimeCalculator($start2, $finish2).calculateTotalHours();
const Total3 = new TimeCalculator($start3, $finish3).calculateTotalHours();



const sketch = (p5) => {
p5.preload = () => {
pic = p5.loadImage(img);

};




p5.setup = () => {
canvas = p5.createCanvas(390,603.2)
p5.background(255);
p5.textFont('Gloria Hallelujah');

};


p5.draw = () => {
p5.background(255);
p5.image(pic,0,0,390,603.2);

let date =  getDate();

p5.textSize(18);
p5.text($name , 80, 90);
p5.text($jobtitle, 80, 120);
p5.text(date, 250, 120);
p5.text($location, 80, 150);


p5.text($task1, 20, 300);
p5.text($start1 , 220, 300);
p5.text($finish1 , 280, 300);
p5.text(Total1 , 336, 300);



p5.text($task2, 20, 332);
p5.text($start2 , 220, 332);
p5.text($finish2 , 280, 332);
 p5.text(Total2 , 336, 330);

p5.text($task3, 20, 370);
p5.text($start3 , 220, 370);
p5.text($finish3 , 280, 370);
p5.text(Total3 , 336, 370);


p5.text($notes, 20, 580);



if (ok === false){


  console.log(ok);
  p5.saveCanvas(canvas,'kolown','png');

  ok = true;
  console.log(ok);

}





};


function getDate()
{
let date = new Date();
function formateDate()
{
return date.toDateString().slice(4);
}

return formateDate();

};


};




function saveDrawing() {

ok = false;

};


function saveCanvas(canvas: any): any {
  throw new Error('Function not implemented.');
}



function sendDataToServer() {
    // convert the canvas image to a data URL
    const dataURL = canvas.canvas.toDataURL();


    
    // send the data URL to the PHP server
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/server/upload.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      // handle response from server
    };
    xhr.send('imageData=' + dataURL);
    alert("sent");
  }


</script>

<section>

  <P5 {sketch}/>

    <div class ="py-5">
        <button class ="px-2 bg-yellow-500 text-gray-50 rounded" on:click={saveDrawing}>Download Image</button>
        <button class ="px-2 bg-yellow-500 text-gray-50 rounded" on:click={sendDataToServer}>Send to Server</button>
        </div>
    
        



 
</section>



<style>
	section {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		flex: 0.6;

	}

 


	
	
</style>