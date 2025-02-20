<?php if (isset($component)) { $__componentOriginal6a37e04c1d0a901224eea81bd84c1b78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a37e04c1d0a901224eea81bd84c1b78 = $attributes; } ?>
<?php $component = App\View\Components\Master::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Master::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-gradient-to-b from-purple-800 to-purple-950 min-h-screen relative overflow-hidden">
        <!-- Éléments décoratifs (étoiles) -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-yellow-200 rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-yellow-200 rounded-full animate-pulse delay-300"></div>
            <div class="absolute top-1/2 left-1/2 w-2 h-2 bg-yellow-200 rounded-full animate-pulse delay-700"></div>
            <div class="absolute top-20 right-20 w-16 h-16 bg-yellow-200 rounded-full opacity-90"></div>
        </div>
    
        <!-- Contenu principal -->
        <div class="relative z-10">
            <!-- En-tête de la page -->
            <div class="pt-24 pb-12">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-12">
                        <h1 class="text-5xl font-bold mb-6">Recettes pour le Ramadan</h1>
                        <p class="text-purple-200 max-w-2xl mx-auto">
                            Découvrez une sélection de délicieuses recettes pour le Suhoor et l'Iftar
                        </p>
                    </div>

                    <!-- Bouton pour partager un témoignage -->
                    <div class="flex justify-center flex-wrap gap-4 mb-12 text-[0.8rem]">
                        <a href="<?php echo e(route('recettes')); ?>">
                            <button class="border-2 <?php echo e(empty($categ) ? 'text-purple-900 bg-yellow-300' : 'border-2 border-yellow-400 text-yellow-500 hover:text-purple-900 hover:bg-yellow-300'); ?>   px-8 py-3 rounded-full font-bold transition-colors duration-300">
                                Tous
                            </button>
                        </a>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('recettes.filter', ['id' => $categorie->id])); ?>">
                                <button class="<?php echo e((isset($categ) && $categ == $categorie->name)? 'text-purple-900 bg-yellow-300' : 'border-2 border-yellow-400 text-yellow-500 hover:text-purple-900 hover:bg-yellow-300'); ?> px-8 py-3 rounded-full font-bold transition-colors duration-300">
                                    <?php echo e($categorie->name); ?>

                                </button>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
    
                    <!-- Barre de recherche et filtres --> 
                    <div  class="flex justify-end mb-8">
                        <div class="flex gap-4">
                            <button 
                                onclick="openShareForm()"
                                class="bg-purple-400  text-purple-900 px-8 py-3 rounded-lg font-bold hover:bg-purple-500 transition-colors duration-300"
                            >
                                <i class="fas fa-plus mr-2"></i>Partager mon Recettes
                            </button>
                        </div>
                    </div>
    
                    <!-- Grille des recettes -->
                    <div id="recipesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Exemple de carte de recette -->
                        <?php $__currentLoopData = $recettes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recette): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-purple-900 bg-opacity-90 rounded-lg overflow-hidden transform transition-transform duration-300 hover:-translate-y-2 backdrop-blur">
                                <div class="relative h-48">
                                    <img src="<?php echo e(asset('storage/' . $recette->photo)); ?>" alt="Recette" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="flex justify-between mb-3">
                                        <h3 class="text-xl font-bold"><?php echo e($recette->titre); ?></h3>
                                        <div class="text-purple-900 bg-yellow-300 px-4 py-1 rounded-full text-xs">
                                            <p><?php echo e($recette->categorie->name); ?></p>
                                        </div>
                                    </div>
                                    <p class="text-purple-200 mb-4"><?php echo e($recette->description); ?></p>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center text-xs">
                                            <div class="h-10 w-10 mr-4 rounded-full bg-yellow-400 flex items-center justify-center">
                                                <i class="fas fa-user text-purple-900"></i>
                                            </div>
                                            <div>
                                                <p><?php echo e($recette->user->first_name . ' ' .  $recette->user->last_name); ?></p>
                                                <p><?php echo e($recette->created_at); ?></p>
                                            </div>
                                        </div>
                                        <div class="flex items-center text-purple-200">
                                            <i class="fas fa-clock mr-2"></i>
                                            <span><?php echo e($Carbon::createFromFormat('H:i:s', $recette->temps_prepare)->format('H\h i\m\i\n s\s')); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire d'ajout de recette -->
    <div id="shareModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="mb-12 bg-purple-900 bg-opacity-90 rounded-lg p-6 backdrop-blur">
            <h2 class="text-2xl font-bold mb-6">Ajouter une nouvelle recette</h2>
            <form action="<?php echo e(route('recettes.store')); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
                <?php echo csrf_field(); ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div>
                            <label for="titre" class="block text-sm font-medium mb-2">Titre de la recette</label>
                            <input 
                                type="text" 
                                id="titre" 
                                name="titre" 
                                required
                                class="w-full px-4 py-3 bg-purple-800 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            >
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium mb-2">Description</label>
                            <textarea 
                                id="description" 
                                name="description" 
                                rows="4" 
                                required
                                class="w-full px-4 py-3 bg-purple-800 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            ></textarea>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="temps_prepare" class="block text-sm font-medium mb-2">Temps de préparation (minutes)</label>
                            <input 
                                type="time" 
                                id="temps_prepare" 
                                name="temps_prepare" 
                                required
                                class="w-full px-4 py-3 bg-purple-800 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                                placeholder="en min"
                            >
                        </div>

                        <div>
                            <label for="categorie" class="block text-sm font-medium mb-2">Catégorie</label>
                            <select 
                                id="categorie" 
                                name="categorie" 
                                required
                                class="w-full px-4 py-3 bg-purple-800 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            >
                                <option value="">Sélectionner une catégorie</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div>
                            <label for="photo" class="block text-sm font-medium mb-2">Photo de la recette</label>
                            <input 
                                type="file" 
                                id="photo" 
                                name="photo" 
                                accept="image/*"
                                required
                                class="w-full px-4 py-3 bg-purple-800 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                            >
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-4">
                    <button 
                        type="button"
                        onclick="closeShareForm()"
                        class="px-6 py-2 rounded-lg border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-purple-900 transition-all duration-300"
                    >
                        Annuler
                    </button>
                    <button 
                        type="submit"
                        class="px-6 py-2 bg-yellow-400 text-purple-900 rounded-lg hover:bg-yellow-300 transition-colors duration-300"
                    >
                        Publier
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
         // Gestionnaires du modal
         function openShareForm() {
            document.getElementById('shareModal').classList.remove('hidden');
        }

        function closeShareForm() {
            document.getElementById('shareModal').classList.add('hidden');
        }

            grid.innerHTML = recipesToShow.map(recipe => `
                <div class="bg-purple-800 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="${recipe.image}" alt="${recipe.title}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">${recipe.title}</h3>
                            <span class="bg-yellow-400 text-purple-900 px-2 py-1 rounded-full text-sm font-bold">
                                ${recipe.category}
                            </span>
                        </div>
                        <p class="text-purple-200 mb-4">${recipe.description}</p>
                        <div class="flex justify-between text-sm text-purple-200">
                            <span><i class="far fa-clock mr-2"></i>${recipe.time}</span>
                            <span><i class="fas fa-signal mr-2"></i>${recipe.difficulty}</span>
                        </div>
                    </div>
                </div>
            `).join('');
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a37e04c1d0a901224eea81bd84c1b78)): ?>
<?php $attributes = $__attributesOriginal6a37e04c1d0a901224eea81bd84c1b78; ?>
<?php unset($__attributesOriginal6a37e04c1d0a901224eea81bd84c1b78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a37e04c1d0a901224eea81bd84c1b78)): ?>
<?php $component = $__componentOriginal6a37e04c1d0a901224eea81bd84c1b78; ?>
<?php unset($__componentOriginal6a37e04c1d0a901224eea81bd84c1b78); ?>
<?php endif; ?><?php /**PATH C:\Users\ycode\Desktop\Briefs\Ramad_On\resources\views/client/recettes/index.blade.php ENDPATH**/ ?>