<?php if (isset($component)) { $__componentOriginal4e38a5862771a37877847e56ee48dcb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e38a5862771a37877847e56ee48dcb3 = $attributes; } ?>
<?php $component = App\View\Components\Authentifier::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('authentifier'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Authentifier::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- Stars Background -->
    <div class="fixed inset-0 pointer-events-none">
        <div class="star absolute top-1/4 left-1/4 w-2 h-2 bg-yellow-200 rounded-full"></div>
        <div class="star absolute top-1/3 right-1/3 w-2 h-2 bg-yellow-200 rounded-full"></div>
        <div class="star absolute bottom-1/4 right-1/4 w-2 h-2 bg-yellow-200 rounded-full"></div>
    </div>

    <div class="container mx-auto px-4 py-8 min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md">
            <!-- Auth Card -->
            <div class="bg-purple-800 rounded-xl shadow-2xl overflow-hidden">
                <!-- Top Decoration -->
                <div class="mosque-decoration h-24 bg-yellow-400"></div>

                <!-- Content -->
                <div class="p-8">
                    <h2 class="text-2xl font-bold text-center text-white mb-8">Créer un compte</h2>

                    <!-- Register Form -->
                    <form id="registerForm" action="<?php echo e(route('register.store')); ?>" method="POST" class="space-y-6">
                        <?php echo csrf_field(); ?>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-2">Prénom</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                        <i class="fas fa-user text-purple-400"></i>
                                    </span>
                                    <input 
                                        type="text" 
                                        required 
                                        name="first_name"
                                        class="w-full pl-10 pr-4 py-3 bg-purple-900 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" 
                                        placeholder="Prénom"
                                    >
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Nom</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                        <i class="fas fa-user text-purple-400"></i>
                                    </span>
                                    <input 
                                        type="text" 
                                        required 
                                        name="last_name"
                                        class="w-full pl-10 pr-4 py-3 bg-purple-900 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" 
                                        placeholder="Nom"
                                    >
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Email</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <i class="fas fa-envelope text-purple-400"></i>
                                </span>
                                <input 
                                    type="email" 
                                    required 
                                    name="email"
                                    class="w-full pl-10 pr-4 py-3 bg-purple-900 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" 
                                    placeholder="votre@email.com"
                                >
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Mot de passe</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <i class="fas fa-lock text-purple-400"></i>
                                </span>
                                <input 
                                    type="password" 
                                    required 
                                    name="password"
                                    class="w-full pl-10 pr-12 py-3 bg-purple-900 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" 
                                    placeholder="••••••••"
                                >
                                <button 
                                    type="button" 
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-purple-400"
                                    onclick="togglePassword(this)"
                                >
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2">Confirmer le mot de passe</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <i class="fas fa-lock text-purple-400"></i>
                                </span>
                                <input 
                                    type="password" 
                                    required 
                                    name="password_confirmation"
                                    class="w-full pl-10 pr-12 py-3 bg-purple-900 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" 
                                    placeholder="••••••••"
                                >
                                <button 
                                    type="button" 
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-purple-400"
                                    onclick="togglePassword(this)"
                                >
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <input 
                                type="checkbox" 
                                required 
                                class="mt-1 h-4 w-4 text-yellow-400 rounded border-gray-300 focus:ring-yellow-400"
                            >
                            <label class="ml-2 text-sm">
                                J'accepte les <a href="#" class="text-yellow-400 hover:text-yellow-300">conditions d'utilisation</a> 
                                et la <a href="#" class="text-yellow-400 hover:text-yellow-300">politique de confidentialité</a>
                            </label>
                        </div>

                        <button 
                            type="submit" 
                            class="w-full bg-yellow-400 text-purple-900 py-3 rounded-lg font-bold hover:bg-yellow-300 transition duration-300"
                        >
                            S'inscrire
                        </button>

                        <p class="text-center text-sm">
                            Déjà inscrit ? 
                            <a href="<?php echo e(route('login')); ?>" class="text-yellow-400 hover:text-yellow-300 font-medium">
                                Connectez-vous
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(button) {
            const input = button.parentElement.querySelector('input');
            const icon = button.querySelector('i');
            
            if (input.type == 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation des mots de passe
            const passwords = this.querySelectorAll('input[type="password"]');
            if (passwords[0].value !== passwords[1].value) {
                alert('Les mots de passe ne correspondent pas !');
                return;
            }
            
            // Collecte des données du formulaire
            const formData = {
                firstName: this.querySelector('input[placeholder="Prénom"]').value,
                lastName: this.querySelector('input[placeholder="Nom"]').value,
                email: this.querySelector('input[type="email"]').value,
                password: passwords[0].value
            };
            
            registerForm.submit();
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e38a5862771a37877847e56ee48dcb3)): ?>
<?php $attributes = $__attributesOriginal4e38a5862771a37877847e56ee48dcb3; ?>
<?php unset($__attributesOriginal4e38a5862771a37877847e56ee48dcb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e38a5862771a37877847e56ee48dcb3)): ?>
<?php $component = $__componentOriginal4e38a5862771a37877847e56ee48dcb3; ?>
<?php unset($__componentOriginal4e38a5862771a37877847e56ee48dcb3); ?>
<?php endif; ?><?php /**PATH C:\Users\ycode\Desktop\Briefs\Ramad_On\resources\views/auth/register.blade.php ENDPATH**/ ?>