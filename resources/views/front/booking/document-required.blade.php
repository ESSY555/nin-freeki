<div class="mt-8 mb-5 w-11/12 m-auto">
    <div class="flex flex-col md:flex-row">
    <div class="" id="div1">
       <div>
           <p class="font-bold text-2xl md:text-3xl lg:text-4xl pb-8">Documents Required (16 yrs & above)</p>
           <p class="font-bold text-2xl md:text-3xl lg:text-4xl">Bring your BVN if you have one and any of below documents</p>
       </div>

       <div class="pt-5">
           <ul class="list-disc list-inside">
               <li>Nigerian international passport (Valid or Expired)</li>
               <li>Nigerian birth certificate</li>
               <li>Authentication letter from the Nigerian embassy/mission</li>
               <li>Government ID for staff of FGN</li>
               <li>If you have a BVN, it is mandatory to bring it along for the NIN enrollment</li>
           </ul>
       </div>

       <div>
           <p class="pt-3 text-[rgb(254,73,44)]">Just one out of the above documents are required and you must bring the physical original along when coming to capture</p>
           <button type="button" class="text-white mt-5 bg-[rgb(254,73,44)] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book Now</button>
       </div>
    </div>
    <div id="div2" class=" hidden">
       <p class="font-bold text-2xl md:text-3xl lg:text-4xl pb-8">Documents Required (below 16 yrs)</p>
       <p class="font-bold text-2lg md:text-2lg lg:text-2xl pb-8">A valid NIN of a parent or guardian is mandatory for the enrolment of child and One/Any of below documents</p>
       <ul class="list-disc list-inside">
           <li>Original birth certificate</li>
           <li>The presence of a parent or legal guardian with a NIN</li>
           <li>Birth Certificate and Evidence of Relationship (For guardian’s NIN)</li>
       </ul>
       <div>
           <p class="pt-3 text-[rgb(254,73,44)]">Just one out of the above documents are required and you must bring the physical original along when coming to capture</p>
           <a href="{{ route('nin.page') }}">  <button type="button" class="text-white mt-5 bg-[rgb(254,73,44)] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book Now</button>
           </a>

       </div>
       </div>
    </div>
    <button id="button1" class="mt-4 bg-indigo-500 text-white p-2 rounded-lg shadow-lg">16 years & Above</button>
    <button id="button2" class="mt-4 bg-red-500 text-white p-2 rounded-lg shadow-lg">Below 16 years</button>
   </div>

   <script>

    // JavaScript to display and hide one div
   document.getElementById('button1').addEventListener('click', function() {
      const div1 = document.getElementById('div1');
      const div2 = document.getElementById('div2');
      div1.classList.remove('hidden');
      div2.classList.add('hidden');
  });

  document.getElementById('button2').addEventListener('click', function() {
      const div1 = document.getElementById('div1');
      const div2 = document.getElementById('div2');
      div1.classList.add('hidden');
      div2.classList.remove('hidden');
  });
</script>
