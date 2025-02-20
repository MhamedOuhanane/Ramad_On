<x-master >
    <!-- Page des témoignages -->
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
                        <h1 class="text-5xl font-bold mb-6">Témoignages du Ramadan</h1>
                        <p class="text-purple-200 max-w-2xl mx-auto">
                            Partagez vos expériences, vos moments de spiritualité et vos réflexions sur ce mois sacré avec notre communauté.
                        </p>
                    </div>

                    <!-- Bouton pour partager un témoignage -->
                    <div class="text-center mb-12">
                        <button 
                            onclick="openShareForm()"
                            class="bg-yellow-400 text-purple-900 px-8 py-3 rounded-full font-bold hover:bg-yellow-300 transition-colors duration-300"
                        >
                            <i class="fas fa-plus mr-2"></i>Partager mon témoignage
                        </button>
                    </div>

                    <!-- Filtres et recherche -->
                    <div class="flex flex-col md:flex-row gap-4 mb-8">
                        <div class="relative flex-1">
                            <input 
                                type="text" 
                                id="searchInput"
                                placeholder="Rechercher dans les témoignages..." 
                                class="w-full pl-10 pr-4 py-3 bg-purple-900 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                            >
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                <i class="fas fa-search text-purple-400"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Grille des témoignages -->
                    <div id="testimonialsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Exemple de carte de témoignage -->
                        @foreach ($temoignages as $temoig)
                            <div class="bg-purple-800 rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                                <img src="${testimonial.image}" alt="" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <h3 class="text-xl font-bold">{{ $temoig->titre }}</h3>
                                        <span class="bg-yellow-400 text-purple-900 px-2 py-1 rounded-full text-sm font-bold">
                                            categorie
                                        </span>
                                    </div>
                                    <p class="text-purple-200 mb-4">{{ Str::limit($temoig->description, 100, '....') }}</p>
                                    <div class="flex justify-between items-center text-sm text-purple-200">
                                        <div class="flex items-center">
                                            <img src="/api/placeholder/32/32" alt="" class="w-8 h-8 rounded-full mr-2">
                                            <span>{{ $temoig->first_name . ' ' .  $temoig->last_name}}</span>
                                            <span>{{ $temoig->created_at }}</span>
                                        </div>
                                        <div class="flex space-x-4">
                                            <button class="hover:text-yellow-400 transition-colors duration-300">
                                                <i class="far fa-comment mr-1"></i>{{ $temoig->commentaires_count }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center mt-12 space-x-2">
                        <button id="prevPage" class="px-4 py-2 bg-purple-900 bg-opacity-90 rounded-lg hover:bg-purple-800 transition-colors duration-300">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div id="pageNumbers" class="flex space-x-2">
                            <!-- Les numéros de page seront injectés ici -->
                        </div>
                        <button id="nextPage" class="px-4 py-2 bg-purple-900 bg-opacity-90 rounded-lg hover:bg-purple-800 transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de partage de témoignage -->
        <div id="shareModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
            <div class="bg-purple-900 bg-opacity-95 backdrop-blur rounded-lg p-8 max-w-2xl w-full mx-4">
                <h2 class="text-2xl font-bold mb-6">Partager mon témoignage</h2>
                <form id="testimonialForm" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Titre</label>
                        <input 
                            type="text" 
                            required
                            class="w-full pl-4 pr-4 py-3 bg-purple-800 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                            placeholder="Donnez un titre à votre témoignage"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Catégorie</label>
                        <select 
                            required
                            class="w-full px-4 py-3 bg-purple-800 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                        >
                            <option value="spiritualité">Spiritualité</option>
                            <option value="communauté">Vie communautaire</option>
                            <option value="bienfaits">Bienfaits personnels</option>
                            <option value="défis">Défis et solutions</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Votre témoignage</label>
                        <textarea 
                            required
                            rows="6"
                            class="w-full px-4 py-3 bg-purple-800 bg-opacity-90 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition-all duration-300"
                            placeholder="Partagez votre expérience..."
                        ></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Image (optionnel)</label>
                        <input 
                            type="file" 
                            accept="image/*"
                            class="w-full text-sm text-purple-200 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-800 file:text-purple-200 hover:file:bg-purple-700 transition-all duration-300"
                        >
                    </div>
                    <div class="flex justify-end space-x-4">
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
    </div>

    <script>
        // Données des témoignages
        const testimonials = [
            {
                id: 1,
                title: "Mon premier Ramadan",
                author: "Sarah M.",
                category: "spiritualité",
                content: "Ce Ramadan a été une expérience transformatrice pour moi. J'ai découvert une paix intérieure que je ne connaissais pas auparavant. Le jeûne m'a appris la patience et la gratitude.",
                date: "2025-03-15",
                likes: 24,
                comments: 8,
                image: "/api/placeholder/400/300"
            },
            {
                id: 2,
                title: "Jeûner en famille",
                author: "Ahmed K.",
                category: "communauté",
                content: "Le Ramadan est toujours plus spécial en famille. Partager l'iftar tous ensemble chaque soir crée des moments inoubliables et renforce nos liens.",
                date: "2025-03-14",
                likes: 36,
                comments: 12,
                image: "/api/placeholder/400/300"
            },
            {
                id: 3,
                title: "Surmonter les défis",
                author: "Leila R.",
                category: "défis",
                content: "Entre le travail et le jeûne, ce n'était pas toujours facile. Mais j'ai trouvé des stratégies pour maintenir mon énergie et rester productive.",
                date: "2025-03-13",
                likes: 42,
                comments: 15,
                image: "/api/placeholder/400/300"
            }
        ];

        // Variables de pagination
        let currentPage = 1;
        const itemsPerPage = 6;
        let filteredTestimonials = [...testimonials];

        // Fonction pour afficher les témoignages
        function displayTestimonials() {
            const grid = document.getElementById('testimonialsGrid');
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const testimonialsToShow = filteredTestimonials.slice(start, end);

            grid.innerHTML = testimonialsToShow.map(testimonial => `
                <div class="bg-purple-800 rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    ${testimonial.image ? `
                        <img src="${testimonial.image}" alt="" class="w-full h-48 object-cover">
                    ` : ''}
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold">${testimonial.title}</h3>
                            <span class="bg-yellow-400 text-purple-900 px-2 py-1 rounded-full text-sm font-bold">
                                ${testimonial.category}
                            </span>
                        </div>
                        <p class="text-purple-200 mb-4">${testimonial.content}</p>
                        <div class="flex justify-between items-center text-sm text-purple-200">
                            <div class="flex items-center">
                                <img src="/api/placeholder/32/32" alt="" class="w-8 h-8 rounded-full mr-2">
                                <span>${testimonial.author}</span>
                            </div>
                            <div class="flex space-x-4">
                                <button class="hover:text-yellow-400 transition-colors duration-300">
                                    <i class="far fa-heart mr-1"></i>${testimonial.likes}
                                </button>
                                <button class="hover:text-yellow-400 transition-colors duration-300">
                                    <i class="far fa-comment mr-1"></i>${testimonial.comments}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');

            updatePagination();
        }

        // Fonction pour mettre à jour la pagination
        function updatePagination() {
            const pageCount = Math.ceil(filteredTestimonials.length / itemsPerPage);
            const pageNumbers = document.getElementById('pageNumbers');
            
            pageNumbers.innerHTML = '';
            for (let i = 1; i <= pageCount; i++) {
                const button = document.createElement('button');
                button.className = `px-4 py-2 rounded-lg transition-colors duration-300 ${
                    currentPage === i 
                        ? 'bg-yellow-400 text-purple-900' 
                        : 'bg-purple-800 hover:bg-purple-700'
                }`;
                button.textContent = i;
                button.onclick = () => {
                    currentPage = i;
                    displayTestimonials();
                };
                pageNumbers.appendChild(button);
            }
        }

        // Gestionnaires du modal
        function openShareForm() {
            document.getElementById('shareModal').classList.remove('hidden');
        }

        function closeShareForm() {
            document.getElementById('shareModal').classList.add('hidden');
        }

        // Gestionnaires d'événements
        document.getElementById('searchInput').addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            filteredTestimonials = testimonials.filter(testimonial => 
                testimonial.title.toLowerCase().includes(searchTerm) ||
                testimonial.content.toLowerCase().includes(searchTerm)
            );
            currentPage = 1;
            displayTestimonials();
        });

        document.getElementById('categoryFilter').addEventListener('change', (e) => {
            const category = e.target.value;
            filteredTestimonials = category === 'all' 
                ? [...testimonials]
                : testimonials.filter(testimonial => testimonial.category === category);
            currentPage = 1;
            displayTestimonials();
        });

        document.getElementById('testimonialForm').addEventListener('submit', (e) => {
            e.preventDefault();
            // Ajoutez ici la logique pour sauvegarder le témoignage
            closeShareForm();
        });

        // Affichage initial
        displayTestimonials();
    </script>
</x-master>