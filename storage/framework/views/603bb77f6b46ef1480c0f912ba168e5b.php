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
    <!-- Contenu principal -->
    <div class="container mx-auto pt-24 pb-12">
        <div class="bg-purple-800 rounded-lg shadow-xl overflow-hidden text-white">
            <!-- En-tête de l'article -->
            <div class="p-6 border-b border-purple-700">
                <div class="flex items-center space-x-4">
                    <div class="h-12 w-12 rounded-full bg-yellow-400 flex items-center justify-center">
                        <i class="fas fa-user text-purple-900"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-yellow-400"><?php echo e($temoignage->user->first_name . ' ' .  $temoignage->user->last_name); ?></h3>
                        <p class="text-sm text-purple-200">Publié le <?php echo e($temoignage->created_at); ?></p>
                    </div>
                </div>
            </div>

            <!-- Contenu du témoignage -->
            <div class="p-6">
                <h1 class="text-2xl font-bold text-yellow-400 mb-4"><?php echo e($temoignage->titre); ?></h1>
                <div class="mb-6 flex flex-col items-center">
                    <img src="<?php echo e(asset('storage/' . $temoignage->photo)); ?>" alt="Image du témoignage" class="w-[80%] rounded-lg mb-4">
                    <p class="text-purple-200 leading-relaxed">
                        <?php echo e($temoignage->description); ?>

                    </p>
                </div>

                <!-- Boutons d'interaction -->
                <div class="flex items-center space-x-6 text-purple-200">
                    <button class="flex items-center space-x-2 hover:text-yellow-400 transition">
                        <i class="far fa-comment"></i>
                        <span><?php echo e($comments->count()); ?> commentaires</span>
                    </button>
                </div>
            </div>

            <!-- Section commentaires -->
            <div class="bg-purple-700 p-6">
                <h2 class="text-xl font-semibold text-yellow-400 mb-6">Commentaires</h2>
                
                <!-- Formulaire de commentaire -->
                <form action="<?php echo e(route('Commentaire', ['id' => $temoignage->id])); ?>" method="POST" class="mb-8">
                    <?php echo csrf_field(); ?>
                    <div class="flex space-x-4">
                        <div class="h-10 w-10 rounded-full bg-yellow-400 flex items-center justify-center">
                            <i class="fas fa-user text-purple-900"></i>
                        </div>
                        <div class="flex-1">
                            <textarea 
                                class="w-full px-4 py-2 rounded-lg bg-purple-600 border border-purple-500 text-white placeholder-purple-300 focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                                placeholder="Ajouter un commentaire..."
                                name="commentaire"
                                rows="3"
                            ></textarea>
                            <button type="submit" class="mt-2 px-6 py-2 bg-yellow-400 text-purple-900 rounded-lg hover:bg-yellow-300 transition font-semibold">
                                Commenter
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Liste des commentaires -->
                <div class="space-y-6">
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex space-x-4">
                            <div class="h-10 w-10 rounded-full bg-yellow-400 flex items-center justify-center">
                                <i class="fas fa-user text-purple-900"></i>
                            </div>
                            <div class="flex-1">
                                <div class="bg-purple-800 p-4 rounded-lg">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="font-semibold text-yellow-400"><?php echo e($comment->user->first_name .' '. $comment->user->last_name); ?></h4>
                                        <span class="text-sm text-purple-200"><?php echo e($comment->created_at); ?></span>
                                    </div>
                                    <p class="text-purple-200"><?php echo e($comment->commentaire); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a37e04c1d0a901224eea81bd84c1b78)): ?>
<?php $attributes = $__attributesOriginal6a37e04c1d0a901224eea81bd84c1b78; ?>
<?php unset($__attributesOriginal6a37e04c1d0a901224eea81bd84c1b78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a37e04c1d0a901224eea81bd84c1b78)): ?>
<?php $component = $__componentOriginal6a37e04c1d0a901224eea81bd84c1b78; ?>
<?php unset($__componentOriginal6a37e04c1d0a901224eea81bd84c1b78); ?>
<?php endif; ?><?php /**PATH C:\Users\ycode\Desktop\Briefs\Ramad_On\resources\views/client/temoignages/show.blade.php ENDPATH**/ ?>