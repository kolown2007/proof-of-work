<script>
  
    import { name,jobtitle, location, notes } from '$lib/stores/inputStore';
    import { task1, start1, finish1} from '$lib/stores/inputStore';
    import { task2, start2, finish2} from '$lib/stores/inputStore';
    import { task3, start3, finish3} from '$lib/stores/inputStore';
    import { Label, Input} from 'flowbite-svelte'; 


    let options = [ 
		'1 am',
		'2 am',
		'3 am',
		'4 am',
		'5 am',
		'6 am',
		'7 am',
		'8 am',
		'9 am',
		'10 am',
		'11 am',
		'12 pm',
		'1 pm',
		'2 pm',
		'3 pm',
		'4 pm',
		'5 pm',
		'6 pm',
		'7 pm',
		'8 pm',
		'9 pm',
		'10 pm',
		'11 pm',
		'12 am',
   
	]


  </script>

<div class='mb-2'>
    <Label for='default-input' class='block mb-2'></Label>
    <Input id='Name' placeholder="Name" bind:value={$name} />
  </div>

  <div class='mb-2'>
    <Label for='default-input' class='block mb-2'></Label>
    <Input id='JobTitle' placeholder="JobTitle" bind:value={$jobtitle}  />
  </div>

  <div class='mb-2'>
    <Label for='default-input' class='block mb-2'></Label>
    <Input id='Location' placeholder="Location" bind:value={$location}  />
  </div>





  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
		<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
			<thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
				<tr>
					<th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
						Tasks
					</th>
					<th scope="col" class="px-6 py-3  bg-gray-50">
					  Start
					</th>
					<th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
					  Finish
					</th>
					
				</tr>
			</thead>
			<tbody> 
				<tr class="border-b border-gray-200 dark:border-gray-700">

					<th scope="row" class="font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
					  <Label for='default-input' class=''></Label>
					  <Input id='Name' placeholder="Task 1" bind:value={$task1} />
					</th>
					
					<td class=" py-2 px-2 bg-gray-50 dark:bg-gray-800">
				   <select bind:value={$start1}>
						{#each options as value} <option {value}>{value}</option>{/each}
					  </select>
           </td>


			 <td class=" py-2 px-2 bg-gray-50 dark:bg-gray-800">
			 <select bind:value={$finish1}>
						{#each options as value} <option {value}> {value} </option>{/each}
					  </select>
	        </td> 
				 
				</tr>

	
				<tr class="border-b border-gray-200 dark:border-gray-700">
					<th scope="row" class="px-1 py-1 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
					  <Label for='default-input' class=''></Label>
					  <Input id='Name' placeholder="Task 2 " bind:value={$task2} />
					</th>

					<td class=" py-2 px-2 bg-gray-50 dark:bg-gray-800">
            <select bind:value={$start2}>
             {#each options as value} <option {value}>{value}</option>{/each}
             </select>
            </td>

						<td class=" py-2 px-2 bg-gray-50 dark:bg-gray-800">
              <select bind:value={$finish2}>
               {#each options as value} <option {value}>{value}</option>{/each}
               </select>
              </td>
				   
				</tr>
	
 <tr class="border-b border-gray-200 dark:border-gray-700">
				  <th scope="row" class="px-1 py-1 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
					<Label for='default-input' class=''></Label>
					<Input id='Name' placeholder="Task 3" bind:value={$task3}/>
				  </th>

          <td class=" py-2 px-2 bg-gray-50 dark:bg-gray-800">
            <select bind:value={$start3}>
             {#each options as value} <option {value}>{value}</option>{/each}
             </select>
            </td>

            <td class=" py-2 px-2 bg-gray-50 dark:bg-gray-800">
              <select bind:value={$finish3}>
               {#each options as value} <option {value}>{value}</option>{/each}
               </select>
              </td>
				  
			  </tr>
				
	 </tbody>
		</table> 
 </div>

 <div class='mb-6'>
  <Label for='default-input' class='block mb-2'></Label>
  <Input id='Job Title' placeholder="Notes" bind:value={$notes} />
</div>