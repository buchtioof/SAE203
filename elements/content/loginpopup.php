<style>
    .icon-btn{
        background: none;
        border: none;
        cursor: pointer;
    }
    /* Pop-up overlay */
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .overlay.active {
        display: flex;
    }

    /* Pop-up box */
    .popup {
        background: #fff;
        padding: 2rem 2.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.2);
        min-width: 300px;
        position: relative;
    }

    .popup h2 {
        margin-top: 0;
        margin-bottom: 1.5rem;
        font-size: 1.3rem;
        text-align: center;
    }

    .popup label {
        display: block;
        margin-bottom: 0.3rem;
        font-weight: 500;
    }

    .popup input[type="email"],
    .popup input[type="password"] {
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
        border: 1px solid #cbd5e0;
        border-radius: 4px;
        font-size: 1rem;
    }

    .popup .submit-btn {
        width: 100%;
        background: #4299e1;
        color: #fff;
        border: none;
        padding: 0.7rem;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
    }

    .popup .submit-btn:hover {
        background: #2b6cb0;
    }

    .popup .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: transparent;
        border: none;
        font-size: 1.3rem;
        cursor: pointer;
        color: #718096;
    }

    .popup .close-btn:hover {
        color: #e53e3e;
    }
</style>
</head>
<button class="icon-btn" id="openLogin" aria-label="Connexion">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
        <path
            d="M128,20A108,108,0,1,0,236,128,108.12,108.12,0,0,0,128,20ZM79.57,196.57a60,60,0,0,1,96.86,0,83.72,83.72,0,0,1-96.86,0ZM100,120a28,28,0,1,1,28,28A28,28,0,0,1,100,120ZM194,179.94a83.48,83.48,0,0,0-29-23.42,52,52,0,1,0-74,0,83.48,83.48,0,0,0-29,23.42,84,84,0,1,1,131.9,0Z">
        </path>
    </svg>
</button>
<!-- Pop-up Overlay -->
<div class="overlay" id="loginOverlay">
    <div class="popup">
        <button class="close-btn" id="closeLogin" title="Fermer">&times;</button>
        <h2>Connexion</h2>
        <form>
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Votre email" required>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" placeholder="Votre mot de passe" required>
            <button type="submit" class="submit-btn">Se connecter</button>
        </form>
    </div>
</div>

<script>
    // Sélection des éléments
    const openBtn = document.getElementById('openLogin');
    const closeBtn = document.getElementById('closeLogin');
    const overlay = document.getElementById('loginOverlay');

    // Ouvre le pop-up
    openBtn.addEventListener('click', () => {
        overlay.classList.add('active');
    });

    // Ferme le pop-up
    closeBtn.addEventListener('click', () => {
        overlay.classList.remove('active');
    });

    // Ferme le pop-up si on clique en dehors de la boîte
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
            overlay.classList.remove('active');
        }
    });

    // (Optionnel) Empêche la soumission réelle du formulaire pour la démo
    document.querySelector('.popup form').addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Connexion simulée !');
        overlay.classList.remove('active');
    });
</script>