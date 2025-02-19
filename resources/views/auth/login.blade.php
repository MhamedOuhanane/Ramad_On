<x-authentifier >
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
                    <h2 class="text-2xl font-bold text-center text-white mb-8">Connexion</h2>

                    <!-- Login Form -->
                    <form id="loginForm" action="{{ route('login.store') }}" method="POST" class="space-y-6">
                        @csrf
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
                            <a href="#" class="block text-sm text-yellow-400 hover:text-yellow-300 mt-2">
                                Mot de passe oublié ?
                            </a>
                        </div>

                        <button 
                            type="submit" 
                            class="w-full bg-yellow-400 text-purple-900 py-3 rounded-lg font-bold hover:bg-yellow-300 transition duration-300"
                        >
                            Se connecter
                        </button>

                        <p class="text-center text-sm">
                            Pas encore de compte ? 
                            <a href="{{ route('register') }}" class="text-yellow-400 hover:text-yellow-300 font-medium">
                                Inscrivez-vous
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
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            const password = this.querySelector('input[type="password"]').value;
            loginForm.submit();
            
        });
    </script>
</x-authentifier>