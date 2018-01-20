<div class="wrapper">
 
 <div class="cols" id="competence">
           @foreach($langages as $langage)
           <div class="col" ontouchstart="this.classList.toggle('hover');">
               <div class="container">
                   <div class="front" style="background-image: url(img/{{ $langage->image }})">
                       <div class="inner">
                           <p>{{ $langage->nom }}</p>
                       </div>
                   </div>
                   <div class="back">
                       <div class="inner">
                         <p><strong>Progression</strong></p>
                           <div class="progress">
                               <div class="progress-bar" role="progressbar" style="width: {{ $langage->pourcentage }}%" aria-valuenow="{{ $langage->pourcentage }}" aria-valuemin="0" aria-valuemax="100">{{ $langage->pourcentage }}%</div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           @endforeach
       </div>
</div>