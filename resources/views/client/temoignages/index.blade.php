<!-- En-tête de la page -->
    <div class="pt-24 pb-12">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold mb-4">Témoignages du Ramadan</h1>
                <p class="text-purple-200 max-w-2xl mx-auto">
                    Partagez vos expériences, vos moments de spiritualité et vos réflexions sur ce mois sacré avec notre communauté.
                </p>
            </div>

            <!-- Bouton pour partager un témoignage -->
            <div class="text-center mb-12">
                <button 
                    onclick="openShareForm()"
                    class="bg-yellow-400 text-purple-900 px-8 py-3 rounded-full font-bold hover:bg-yellow-300 transition"
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
                        class="w-full pl-10 pr-4 py-3 bg-purple-800 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                    >
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <i class="fas fa-search text-purple-400"></i>
                    </span>
                </div>
                <select 
                    id="categoryFilter"
                    class="px-4 py-3 bg-purple-800 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                >
                    <option value="all">Tous les sujets</option>
                    <option value="spiritualité">Spiritualité</option>
                    <option value="communauté">Vie communautaire</option>
                    <option value="bienfaits">Bienfaits personnels</option>
                    <option value="défis">Défis et solutions</option>
                </select>
            </div>

            <!-- Grille des témoignages -->
            <div id="testimonialsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Les témoignages seront injectés ici via JavaScript -->
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12 space-x-2">
                <button id="prevPage" class="px-4 py-2 bg-purple-800 rounded-lg hover:bg-purple-700">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div id="pageNumbers" class="flex space-x-2">
                    <!-- Les numéros de page seront injectés ici -->
                </div>
                <button id="nextPage" class="px-4 py-2 bg-purple-800 rounded-lg hover:bg-purple-700">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal de partage de témoignage -->
    <div id="shareModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="bg-purple-800 rounded-lg p-8 max-w-2xl w-full mx-4">
            <h2 class="text-2xl font-bold mb-6">Partager mon témoignage</h2>
            <form id="testimonialForm" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Titre</label>
                    <input 
                        type="text" 
                        required
                        class="w-full pl-4 pr-4 py-3 bg-purple-900 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                        placeholder="Donnez un titre à votre témoignage"
                    >
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Catégorie</label>
                    <select 
                        required
                        class="w-full px-4 py-3 bg-purple-900 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
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
                        class="w-full px-4 py-3 bg-purple-900 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"
                        placeholder="Partagez votre expérience..."
                    ></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Image (optionnel)</label>
                    <input 
                        type="file" 
                        accept="image/*"
                        class="w-full"
                    >
                </div>
                <div class="flex justify-end space-x-4">
                    <button 
                        type="button"
                        onclick="closeShareForm()"
                        class="px-6 py-2 rounded-lg border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-purple-900 transition"
                    >
                        Annuler
                    </button>
                    <button 
                        type="submit"
                        class="px-6 py-2 bg-yellow-400 text-purple-900 rounded-lg hover:bg-yellow-300 transition"
                    >
                        Publier
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Données des témoignages (à remplacer par des données dynamiques)
        const testimonials = [
            {
                id: 1,
                title: "Mon premier Ramadan",
                author: "Sarah M.",
                category: "spiritualité",
                content: "Ce Ramadan a été une expérience transformatrice...",
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
                content: "Le Ramadan est toujours plus spécial en famille...",
                date: "2025-03-14",
                likes: 36,
                comments: 12,
                image: "/api/placeholder/400/300"
            },
            // ... Ajoutez plus de témoignages ici
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
                <div class="testimonial-card bg-purple-800 rounded-lg overflow-hidden">
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
                                <button class="hover:text-yellow-400">
                                    <i class="far fa-heart mr-1"></i>${testimonial.likes}
                                </button>
                                <button class="hover:text-yellow-400">
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
                button.className = `px-4 py-2 rounded-lg ${currentPage === i ? 'bg-yellow-400 text-purple-900' : 'bg-purple-800 hover:bg-purple-700'}`;
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
</body>
</html>