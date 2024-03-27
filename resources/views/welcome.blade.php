<x-welcome-layout>
    <div class="absolute -top-48 -z-10 h-[30vw] w-[30vw] -rotate-45 rounded-full bg-gradient-to-br from-indigo-300 via-rose-200 to-green-600 opacity-70 blur-3xl"></div>
    <nav class="sticky top-0 z-20 flex w-full justify-end gap-2 border-b border-slate-200 border-opacity-20 bg-gray-950/20 p-4 backdrop-blur-md">
        @auth
            <a href="{{ route('profile.show', ['user' => auth()->user()->username]) }}" wire:navigate>
                <x-primary-button>Your Profile</x-primary-button>
            </a>
        @else
            <a href="{{ route('login') }}" wire:navigate>
                <x-primary-button>Log In</x-primary-button>
            </a>
            <a href="{{ route('register') }}" wire:navigate>
                <x-primary-button>Register</x-primary-button>
            </a>
        @endauth
    </nav>

    <main class="my-8 flex w-full flex-1 flex-col items-center justify-center gap-8 overflow-x-hidden p-4 pb-12">
        <section class="mt-24 flex flex-col items-center">
            <a href="{{ route('welcome') }}" wire:navigate>
                <svg class="z-10 w-72" alt="Pinkary logo" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 643 212"><path fill="#fff" d="M17.596 171.084c-4.24 0-8.268-1.131-12.084-3.392C1.83733 165.431 0 162.533 0 159c0-1.837.28267-3.816.848-5.936.70667-2.12 1.34267-4.099 1.908-5.936 4.38133-13.427 8.48-25.935 12.296-37.524 3.816-11.7307 7.632-22.9667 11.448-33.708 3.9573-10.8827 8.056-21.7653 12.296-32.648 4.3813-10.8827 9.2573-22.26 14.628-34.132-5.3707 1.1307-9.964 2.6147-13.78 4.452-3.816 1.696-6.9253 3.2507-9.328 4.664-2.4027 1.272-4.1693 1.908-5.3 1.908-.7067 0-1.7667-.4947-3.18-1.484-1.272-.9893-2.4027-2.12-3.392-3.392-.9893-1.272-1.484-2.4027-1.484-3.392 3.9573-1.696 8.5507-3.46267 13.78-5.3 5.3707-1.83733 11.1653-3.392 17.384-4.664C54.3427.636 60.5613 0 66.78 0c6.6427 0 13.4267.91867 20.352 2.756 6.9253 1.696 13.285 4.31066 19.08 7.844 5.936 3.392 10.671 7.7027 14.204 12.932 3.675 5.088 5.512 11.0947 5.512 18.02 0 7.4907-1.696 13.9213-5.088 19.292-3.392 5.3707-7.915 9.8933-13.568 13.568-5.512 3.6747-11.5187 6.6427-18.02 8.904-6.5013 2.2613-13.0027 3.9573-19.504 5.088-6.36 1.1307-12.084 1.908-17.172 2.332-5.088.424-8.904.636-11.448.636h-1.272c-3.9573 13.992-7.844 27.984-11.66 41.976-3.816 13.851-7.3493 26.429-10.6 37.736ZM41.764 84.8c7.9147-.5653 15.8293-1.908 23.744-4.028 7.9147-2.12 15.052-5.0173 21.412-8.692 6.5013-3.816 11.66-8.5507 15.476-14.204 3.957-5.6533 5.936-12.2253 5.936-19.716 0-7.0667-1.908-12.7907-5.724-17.172-3.6747-4.3813-8.48-7.7027-14.416-9.964-5.7947-2.26133-11.9427-3.46267-18.444-3.60401C64.66 17.3133 59.784 29.044 55.12 42.612 50.456 56.0387 46.004 70.1013 41.764 84.8Z"/><path fill="#fff" d="M123.412 159c-6.219 0-10.883-1.837-13.992-5.512-3.109-3.675-4.664-8.127-4.664-13.356 0-3.251.565-7.349 1.696-12.296 1.131-4.947 2.685-10.105 4.664-15.476 2.12-5.512 4.523-10.671 7.208-15.476 2.685-4.8053 5.583-8.692 8.692-11.66 3.109-3.1093 6.219-4.664 9.328-4.664 1.696 0 3.18.5653 4.452 1.696 1.272.9893 1.908 2.4733 1.908 4.452 0 1.8373-1.131 4.5933-3.392 8.268-2.12 3.6747-4.664 7.915-7.632 12.72-2.827 4.805-5.371 9.823-7.632 15.052-2.12 5.088-3.18 9.964-3.18 14.628 0 4.523.777 7.561 2.332 9.116 1.696 1.413 4.099 2.12 7.208 2.12 4.805 0 10.035-2.403 15.688-7.208 5.653-4.805 11.519-13.215 17.596-25.228l3.18 3.392c-4.947 12.437-11.236 22.119-18.868 29.044-7.632 6.925-15.829 10.388-24.592 10.388Zm25.016-95.612c-2.685 0-5.159-.636-7.42-1.908-2.12-1.4133-3.18-3.5333-3.18-6.36 0-3.392 1.837-6.2893 5.512-8.692 3.675-2.4027 7.491-3.604 11.448-3.604 2.544 0 4.664.5653 6.36 1.696 1.837 1.1307 2.756 3.18 2.756 6.148 0 2.968-1.625 5.8653-4.876 8.692-3.251 2.6853-6.784 4.028-10.6 4.028Z"/><path fill="#fff" d="M229.654 156.88c-5.512 0-9.752-1.413-12.72-4.24-2.827-2.685-4.24-6.148-4.24-10.388 0-2.827.495-5.795 1.484-8.904.989-3.251 1.979-6.501 2.968-9.752.989-3.251 1.484-6.36 1.484-9.328 0-3.109-.777-5.229-2.332-6.36-1.413-1.272-3.109-1.908-5.088-1.908-4.24 0-8.621 1.767-13.144 5.3-4.381 3.392-8.692 7.703-12.932 12.932-4.099 5.229-7.985 10.671-11.66 16.324-3.675 5.653-6.855 10.741-9.54 15.264-2.685 0-5.229-.495-7.632-1.484-2.403-.848-4.452-2.403-6.148-4.664.141-.707.989-2.827 2.544-6.36 1.413-3.675 3.039-7.985 4.876-12.932 1.837-5.088 3.463-10.388 4.876-15.9 1.413-5.512 2.12-10.529 2.12-15.052.989-1.1307 2.473-2.2613 4.452-3.392 2.12-1.1307 4.311-1.696 6.572-1.696 4.947 0 7.42 2.12 7.42 6.36 0 1.696-.353 4.24-1.06 7.632-.565 3.251-1.413 6.996-2.544 11.236 3.675-4.947 7.703-9.611 12.084-13.992 4.381-4.381 8.904-7.9147 13.568-10.6 4.805-2.8267 9.611-4.24 14.416-4.24 6.077 0 10.529 2.0493 13.356 6.148 2.968 4.099 4.452 8.621 4.452 13.568 0 4.24-.707 8.197-2.12 11.872-1.413 3.675-2.827 7.137-4.24 10.388-1.272 3.251-1.908 6.431-1.908 9.54 0 2.261.495 3.887 1.484 4.876 1.131.848 2.332 1.272 3.604 1.272 3.392 0 6.925-1.625 10.6-4.876 3.675-3.251 7.137-7.349 10.388-12.296 3.392-5.088 6.36-10.176 8.904-15.264l3.604 2.968c-2.968 6.925-6.36 13.285-10.176 19.08-3.675 5.653-7.844 10.247-12.508 13.78-4.523 3.392-9.611 5.088-15.264 5.088Z"/><path fill="#fff" d="M325.617 160.696c-4.381 0-8.197-1.413-11.448-4.24-3.251-2.827-5.865-6.36-7.844-10.6-1.979-4.24-3.463-8.551-4.452-12.932-.989-4.523-1.484-8.409-1.484-11.66 1.979-.424 4.452-1.06 7.42-1.908 2.968-.848 6.007-1.979 9.116-3.392 3.109-1.555 5.653-3.392 7.632-5.512 2.12-2.261 3.18-4.947 3.18-8.056 0-2.544-.848-4.5933-2.544-6.148-1.555-1.5547-3.816-2.332-6.784-2.332-3.957 0-7.703 1.3427-11.236 4.028-3.533 2.544-6.855 5.936-9.964 10.176-2.968 4.24-5.724 8.833-8.268 13.78-2.403 4.947-4.593 9.752-6.572 14.416-1.837 4.664-3.392 8.692-4.664 12.084-1.555 4.24-3.039 7.067-4.452 8.48-1.413 1.555-3.463 2.332-6.148 2.332-.989 0-2.191-.283-3.604-.848-1.272-.565-2.403-1.979-3.392-4.24-.848-2.261-1.272-5.865-1.272-10.812 0-8.621 1.201-18.091 3.604-28.408s5.583-20.776 9.54-31.376c4.099-10.7413 8.551-20.988 13.356-30.74 4.805-9.752 9.681-18.5147 14.628-26.288 4.947-7.7733 9.54-13.9213 13.78-18.444 4.381-4.52267 7.985-6.784 10.812-6.784 2.403 0 4.381 1.484 5.936 4.452 1.696 2.82667 2.544 6.5013 2.544 11.024 0 4.8053-1.06 10.176-3.18 16.112-2.12 5.7947-5.159 11.7307-9.116 17.808-3.816 5.936-8.409 11.5893-13.78 16.96-5.371 5.3707-11.307 9.964-17.808 13.78-3.957 9.1867-6.996 18.3027-9.116 27.348-2.12 8.904-3.463 16.819-4.028 23.744 2.544-5.795 5.441-11.731 8.692-17.808 3.251-6.077 6.855-11.731 10.812-16.96 3.957-5.3707 8.197-9.6813 12.72-12.932 4.664-3.2507 9.611-4.876 14.84-4.876 5.653 0 10.6 1.9787 14.84 5.936s6.36 8.904 6.36 14.84c0 4.24-1.131 7.915-3.392 11.024-2.261 3.109-5.088 5.724-8.48 7.844-3.251 1.979-6.572 3.463-9.964 4.452-3.392.989-6.289 1.555-8.692 1.696.424 1.837.989 4.169 1.696 6.996.848 2.827 1.908 5.583 3.18 8.268 1.272 2.685 2.897 4.947 4.876 6.784 1.979 1.837 4.311 2.756 6.996 2.756 3.533 0 7.137-1.625 10.812-4.876 3.816-3.251 7.491-7.561 11.024-12.932 3.675-5.371 6.925-11.307 9.752-17.808l2.968 3.604c-2.403 7.067-5.724 13.851-9.964 20.352-4.099 6.501-8.692 11.731-13.78 15.688-5.088 4.099-10.317 6.148-15.688 6.148Zm-30.316-93.704c3.816-3.392 7.844-7.5613 12.084-12.508 4.24-5.088 7.844-10.4587 10.812-16.112 3.109-5.7947 4.735-11.3067 4.876-16.536V21.2c-1.413.5653-3.675 3.0387-6.784 7.42-2.968 4.24-6.289 9.6813-9.964 16.324-3.675 6.6427-7.349 13.992-11.024 22.048Z"/><path fill="#fff" d="M368.211 162.604c-4.664 0-8.692-1.555-12.084-4.664-3.533-3.109-5.3-7.773-5.3-13.992 0-4.947 1.131-10.317 3.392-16.112 2.261-5.795 5.371-11.519 9.328-17.172 3.957-5.653 8.48-10.7413 13.568-15.264 5.088-4.664 10.529-8.4093 16.324-11.236 5.795-2.8267 11.589-4.24 17.384-4.24 6.077 0 11.236 1.5547 15.476 4.664 4.24 3.1093 6.36 7.208 6.36 12.296 0 3.816-1.343 6.572-4.028 8.268-2.685 1.696-5.865 2.191-9.54 1.484.283-1.272.495-2.544.636-3.816.283-1.272.424-2.615.424-4.028 0-2.8267-.565-5.3707-1.696-7.632-1.131-2.2613-3.533-3.392-7.208-3.392-3.957 0-7.985 1.3427-12.084 4.028-4.099 2.6853-8.056 6.2187-11.872 10.6-3.675 4.24-6.996 8.975-9.964 14.204-2.968 5.088-5.3 10.105-6.996 15.052-1.696 4.947-2.544 9.399-2.544 13.356 0 4.523 1.625 6.784 4.876 6.784 3.251 0 6.855-1.555 10.812-4.664 3.957-3.251 7.915-7.279 11.872-12.084 4.099-4.805 7.985-9.681 11.66-14.628 3.675-5.088 6.855-9.399 9.54-12.932.424-.707.989-1.06 1.696-1.06.565.141 1.625.495 3.18 1.06 1.696.424 3.251 1.131 4.664 2.12 1.413.989 2.12 2.261 2.12 3.816 0 1.413-.636 3.251-1.908 5.512-1.131 2.12-2.544 4.523-4.24 7.208-1.555 2.544-2.968 5.159-4.24 7.844-1.131 2.544-1.696 5.017-1.696 7.42 0 1.837.495 3.604 1.484 5.3.989 1.555 2.615 2.332 4.876 2.332 3.392 0 8.127-2.473 14.204-7.42 6.219-5.088 12.508-13.639 18.868-25.652l4.028 4.028c-3.392 7.632-7.491 14.416-12.296 20.352-4.664 5.795-9.611 10.317-14.84 13.568-5.229 3.392-10.529 5.088-15.9 5.088-5.795 0-10.105-1.837-12.932-5.512s-4.381-7.632-4.664-11.872v-1.06c-5.653 6.784-10.883 12.155-15.688 16.112-4.664 3.957-9.681 5.936-15.052 5.936Z"/><path fill="#fff" d="M489.758 158.152c-5.229 0-9.469-1.413-12.72-4.24-3.251-2.685-4.876-6.36-4.876-11.024 0-3.957.989-8.197 2.968-12.72 1.979-4.523 3.957-8.975 5.936-13.356 2.12-4.381 3.18-8.268 3.18-11.66 0-3.251-1.06-5.936-3.18-8.056-2.12-2.2613-4.593-4.0987-7.42-5.512-3.109 7.7733-6.643 15.335-10.6 22.684-3.816 7.208-6.925 12.861-9.328 16.96l-3.18-6.148c1.979-3.675 4.593-8.904 7.844-15.688 3.251-6.784 6.36-14.3453 9.328-22.684-1.413-1.4133-2.12-3.3213-2.12-5.724 0-3.6747 1.131-7.1373 3.392-10.388s4.452-4.876 6.572-4.876c1.696 0 2.897.9893 3.604 2.968.848 1.8373 1.272 3.1093 1.272 3.816 0 .7067-.353 1.9787-1.06 3.816-.565 1.8373-.989 3.18-1.272 4.028.141 1.5547 1.343 3.1093 3.604 4.664 2.403 1.4133 5.088 3.1093 8.056 5.088 2.968 1.9787 5.583 4.452 7.844 7.42s3.392 6.713 3.392 11.236c0 4.099-.919 8.268-2.756 12.508-1.837 4.24-3.675 8.197-5.512 11.872-1.837 3.675-2.756 6.855-2.756 9.54 0 1.979.495 3.321 1.484 4.028 1.131.565 2.403.848 3.816.848 3.392 0 6.925-.989 10.6-2.968 3.675-2.12 7.279-4.805 10.812-8.056 3.533-3.251 6.643-6.643 9.328-10.176 2.685-3.675 4.735-6.996 6.148-9.964l5.088 3.816c-2.685 6.077-6.572 12.084-11.66 18.02-5.088 5.795-10.741 10.6-16.96 14.416-6.219 3.675-12.508 5.512-18.868 5.512Z"/><path fill="#fff" d="M537.73 212c-3.534 0-6.855-1.131-9.964-3.392-2.968-2.12-4.452-5.583-4.452-10.388 0-4.523 1.342-8.621 4.028-12.296 2.685-3.533 6.148-6.855 10.388-9.964 4.24-2.968 8.762-5.724 13.568-8.268 4.946-2.403 9.681-4.664 14.204-6.784 1.554-4.099 3.25-9.257 5.088-15.476 1.978-6.36 3.674-12.225 5.088-17.596-4.382 6.077-9.046 11.448-13.992 16.112-4.947 4.664-10.459 6.996-16.536 6.996-2.544 0-5.23-.495-8.056-1.484-2.827-1.131-5.23-2.968-7.208-5.512-1.838-2.685-2.756-6.219-2.756-10.6 0-3.675.636-8.127 1.908-13.356 1.413-5.229 3.109-10.317 5.088-15.264 2.12-5.088 4.31-9.2573 6.572-12.508 2.261-3.392 4.24-5.088 5.936-5.088.848 0 2.049.3533 3.604 1.06 1.696.5653 3.321 1.4133 4.876 2.544 1.554.9893 2.544 2.12 2.968 3.392-1.272 1.696-2.686 4.1693-4.24 7.42-1.555 3.109-3.039 6.643-4.452 10.6-1.414 3.816-2.615 7.561-3.604 11.236-.848 3.675-1.272 6.855-1.272 9.54 0 2.12.424 3.957 1.272 5.512.848 1.555 2.473 2.332 4.876 2.332 3.109 0 6.289-1.272 9.54-3.816 3.392-2.544 6.642-5.795 9.752-9.752 3.25-3.957 6.148-7.985 8.692-12.084.282-.989.565-2.544.848-4.664.282-2.12.777-4.311 1.484-6.572.706-2.403 1.908-4.5933 3.604-6.572 1.837-1.9787 4.381-2.968 7.632-2.968 1.13 0 2.19.0707 3.18.212.989.1413 2.19.3533 3.604.636 0 2.12-.778 6.289-2.332 12.508-1.414 6.077-3.322 13.144-5.724 21.2-2.403 8.056-5.088 16.112-8.056 24.168 5.936-2.403 12.084-6.36 18.444-11.872 6.501-5.653 11.73-13.639 15.688-23.956l3.604 2.968c-2.12 7.067-5.371 13.215-9.752 18.444-4.24 5.229-9.046 9.681-14.416 13.356-5.371 3.675-10.812 6.713-16.324 9.116-3.816 9.187-7.986 17.667-12.508 25.44-4.382 7.773-9.046 13.921-13.992 18.444-4.947 4.664-10.247 6.996-15.9 6.996Zm-2.12-7.844c2.685 0 6.43-2.827 11.236-8.48 4.805-5.653 9.681-14.133 14.628-25.44-4.523 2.261-9.116 4.876-13.78 7.844-4.523 3.109-8.339 6.36-11.448 9.752-3.11 3.392-4.664 6.855-4.664 10.388 0 1.413.282 2.756.848 4.028.706 1.272 1.766 1.908 3.18 1.908Z"/><circle cx="631.146" cy="96.1079" r="11.7778" fill="#EC4899"/></svg>
            </a>

            <div
                class="rounded-full bg-pink-500 bg-opacity-90 px-3 py-1.5 text-sm font-medium uppercase text-slate-900 mt-5"
                style="font-stretch: 120%"
            >
                One link. All your socials.
            </div>
        </section>

        <h2 class="mt-12 max-w-4xl text-center text-3xl font-light md:text-4xl" style="font-stretch: 120%">
            Create a landing page for all your links and connect with like-minded people <span class="text-pink-500">without the noise</span>.
        </h2>

        <section class="mt-28 w-full max-w-2xl">
            <div class="grid w-full gap-2 md:grid-cols-2">
                <div class="rounded-2xl border-t border-slate-800 bg-slate-900 p-4 transition-colors md:aspect-video">
                    <div class="mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-gray-950">
                        <x-icons.bolt class="h-5 w-5" />
                    </div>

                    <h3>Create a profile</h3>
                    <p class="text-slate-400">Choose a username, add a bio, and you're good to go.</p>
                </div>

                <div class="rounded-2xl border-t border-slate-800 bg-slate-900 p-4 md:aspect-video">
                    <div class="mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-gray-950">
                        <x-icons.link class="h-5 w-5" />
                    </div>

                    <h3>Share your links</h3>
                    <p class="text-slate-400">Collect links of your social profiles, your work, and what matters to you.</p>
                </div>

                <div class="rounded-2xl border-t border-slate-800 bg-slate-900 p-4 md:aspect-video">
                    <div class="mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-gray-950">
                        <x-icons.chat-bubble class="h-5 w-5" />
                    </div>

                    <h3>Ask and answer questions</h3>
                    <p class="text-slate-400">Engage with the community in an open and friendly way.</p>
                </div>

                <div class="rounded-2xl border-t border-slate-800 bg-slate-900 p-4 md:aspect-video">
                    <div class="mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-gray-950">
                        <x-icons.globe class="h-5 w-5" />
                    </div>

                    <h3>Discover</h3>
                    <p class="text-slate-400">keep an eye on the people you admire, and expand your circle.</p>
                </div>
            </div>
        </section>

        <section class="relative mt-20 grid w-full max-w-2xl grid-cols-1 place-items-center gap-2 md:grid-cols-2">
            <div class="absolute -left-20 top-0 h-56 w-56 rounded-full bg-gradient-to-r from-teal-500 via-transparent to-emerald-300 blur-3xl"></div>

            <div class="z-10 order-2 mt-10 w-full max-w-sm md:order-1 md:mt-0">
                <livewire:users.index />
            </div>

            <div class="order-1 flex cursor-pointer flex-col items-center justify-center transition-transform duration-700 sm:max-w-md md:order-2 md:-translate-y-10 md:translate-x-10 md:items-start md:hover:-translate-y-5 md:hover:translate-x-5">
                <h2 class="mb-2 w-full font-semibold">Lots of interesting profiles.</h2>
                <p class="text-slate-400">On pinkary you can find old friends or meet new interesting profiles.</p>
                <svg class="ml-16 mt-10 hidden h-auto w-24 -rotate-45 md:block" viewBox="0 0 251 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_3_230)"><path d="M14.4435 26.0257C16.3478 34.2205 18.0405 42.2052 20.1564 51.2405C14.6551 50.6101 11.4813 47.2481 10.2118 43.4659C6.40317 32.1193 2.80615 20.5625 0.267089 8.79558C-1.21404 2.07164 3.65251 -1.50048 10.2118 0.600755C21.2144 3.96273 32.0054 7.95508 43.0081 11.7373C43.6428 11.9474 44.4892 12.1576 44.7008 12.5778C45.7587 14.0487 46.3935 15.7296 47.2398 17.4106C45.7587 18.041 44.2776 19.5119 43.0081 19.3017C38.5647 18.6714 34.3329 17.6208 30.1011 16.7803C27.7737 16.36 25.6577 15.7297 22.2723 16.7803C24.5998 19.3018 26.9273 22.0333 29.2548 24.5548C79.6129 74.5642 155.15 85.0703 217.781 51.2405C225.821 46.8279 233.227 41.5748 241.055 36.742C243.806 35.061 246.557 33.5901 249.307 31.9092C249.942 32.3294 250.365 32.9598 251 33.38C250.365 35.2711 250.154 37.7926 248.673 39.0533C244.018 43.4659 239.363 47.8785 234.073 51.6607C181.599 89.4829 108.601 90.9538 52.1064 54.8126C41.3154 47.8785 31.7938 39.0533 21.8492 31.0686C19.7333 29.3876 18.0406 27.4966 16.1363 25.6054C15.7131 25.3953 15.0783 25.6054 14.4435 26.0257Z" fill="currentColor"></path></g>
                </svg>
                <svg class="-ml-12 mt-12 h-auto w-16 rotate-90 md:hidden" viewBox="0 0 193 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M173.928 21.1292C115.811 44.9386 58.751 45.774 0 26.1417C4.22669 21.7558 7.81938 23.4266 10.5667 24.262C31.7002 29.9011 53.4676 30.5277 75.0238 31.3631C106.09 32.6162 135.465 25.5151 164.207 14.0282C165.475 13.6104 166.532 12.775 169.068 11.1042C154.486 8.18025 139.903 13.1928 127.223 7.34485C127.435 6.50944 127.435 5.46513 127.646 4.62971C137.156 4.00315 146.877 3.37658 156.388 2.54117C165.898 1.70575 175.196 0.661517 184.706 0.0349538C191.68 -0.382755 194.639 2.9589 192.103 9.22453C188.933 17.3698 184.495 24.8886 180.48 32.6162C180.057 33.4516 179.423 34.4959 178.578 34.9136C176.253 35.749 173.928 35.9579 171.392 36.5845C170.97 34.4959 169.913 32.1985 170.124 30.3188C170.547 27.8126 172.026 25.724 173.928 21.1292Z" fill="currentColor"></path>
                </svg>
            </div>
        </section>

        <section class="relative mt-20 flex w-full max-w-3xl flex-col place-items-center gap-2 md:flex-row">
            <div class="absolute -right-20 top-0 -z-10 h-56 w-56 rotate-180 rounded-full bg-gradient-to-r from-teal-500 via-transparent to-emerald-300 blur-3xl"></div>

            <div class="flex cursor-pointer flex-col items-center justify-center text-left transition-transform duration-700 sm:max-w-md md:-translate-x-10 md:-translate-y-10 md:items-end md:text-right md:hover:-translate-x-5 md:hover:-translate-y-5">
                <h2 class="mb-2 w-full font-semibold">Any questions or thanks?</h2>
                <p class="w-full text-slate-400">Pinkary has a simple and direct way to communicate, even anonymously.</p>

                <svg class="mr-16 mt-12 hidden h-auto w-20 rotate-45 md:block" viewBox="0 0 220 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.17247 25.8421C5.28745 28.1788 7.82542 30.0907 9.7289 32.6399C26.0142 55.3699 49.279 66.6287 75.0817 72.7892C83.9646 74.9135 94.1165 74.7011 103.211 72.7892C129.225 67.6909 152.913 56.8569 173.428 39.8625C179.35 34.9766 184.426 28.8161 188.656 21.8059C186.33 22.6556 183.792 23.5054 181.465 24.5675C174.697 27.5415 167.929 30.728 160.95 33.2772C157.989 34.3393 154.393 34.3393 151.009 34.1269C149.74 34.1269 147.837 32.215 147.625 30.9404C147.414 29.6658 148.683 27.3291 149.74 27.1167C167.718 21.5935 183.369 10.972 199.654 1.83746C205.364 -1.34899 208.96 -0.49927 211.498 5.23635C217.631 19.4692 220.381 34.5517 219.958 50.0592C219.958 50.484 219.112 51.1213 217.843 52.3959C205.364 47.7224 209.171 34.1269 203.038 23.2929C201.557 25.8421 200.5 27.9664 199.231 29.6658C172.582 62.5926 137.262 80.0118 96.2315 86.3848C90.0981 87.4469 83.3301 87.022 76.9852 85.9599C53.7205 81.9237 32.9937 72.1519 15.8623 55.7948C10.3634 50.484 6.34493 43.4738 2.32647 36.8885C0.634492 34.3393 0.634494 30.728 0 27.754C1.05749 27.1167 2.11498 26.4794 3.17247 25.8421Z" fill="currentColor"></path>
                </svg>
                <svg class="-ml-12 mt-12 h-auto w-16 rotate-90 md:hidden" viewBox="0 0 193 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M173.928 21.1292C115.811 44.9386 58.751 45.774 0 26.1417C4.22669 21.7558 7.81938 23.4266 10.5667 24.262C31.7002 29.9011 53.4676 30.5277 75.0238 31.3631C106.09 32.6162 135.465 25.5151 164.207 14.0282C165.475 13.6104 166.532 12.775 169.068 11.1042C154.486 8.18025 139.903 13.1928 127.223 7.34485C127.435 6.50944 127.435 5.46513 127.646 4.62971C137.156 4.00315 146.877 3.37658 156.388 2.54117C165.898 1.70575 175.196 0.661517 184.706 0.0349538C191.68 -0.382755 194.639 2.9589 192.103 9.22453C188.933 17.3698 184.495 24.8886 180.48 32.6162C180.057 33.4516 179.423 34.4959 178.578 34.9136C176.253 35.749 173.928 35.9579 171.392 36.5845C170.97 34.4959 169.913 32.1985 170.124 30.3188C170.547 27.8126 172.026 25.724 173.928 21.1292Z" fill="currentColor"></path>
                </svg>
            </div>

            <div id="answers" class="mt-10 flex w-full flex-col gap-8 sm:max-w-md md:mt-0">
                @if ($question = App\Models\Question::find('9b7fd5db-76a5-4533-910b-ad5590ed6124'))
                    <livewire:questions.show :questionId="$question->id" />
                @endif

                @if ($question = App\Models\Question::find('9b6e38c2-15db-4cd0-a0d7-3a300e877296'))
                    <livewire:questions.show :questionId="$question->id" />
                @endif

                @if ($question = App\Models\Question::find('9b899451-e4cc-494d-aa19-cf16e66f52f6'))
                    <livewire:questions.show :questionId="$question->id" />
                    <livewire:questions.show :questionId="$question->id" />
                @endif
            </div>
        </section>

        <div class="mt-28 flex max-w-2xl flex-col items-center gap-4 py-4 text-2xl font-light">
            <div class="animate-pulse">
                <x-icons.light-bulb class="h-8 w-8" />
            </div>

            <h2 class="text-center">
                Pinkary is now open-source! You can get early access by
                <a href="https://github.com/sponsors/nunomaduro" target="_blank" class="underline">sponsoring the project on GitHub</a>
                .
            </h2>
        </div>

        <section class="mb-16 mt-40 flex flex-col items-center gap-8">
            @auth
                <h3 class="mb-4 w-full max-w-2xl text-center text-3xl font-light md:text-4xl" style="font-stretch: 120%">
                    Thank you for being part of this community!
                </h3>
            @else
                <h3 class="mb-4 w-full max-w-2xl text-center text-4xl font-light" style="font-stretch: 120%">
                    <a href="{{ route('register') }}" wire:navigate class="underline">Join</a>
                    this growing community!
                </h3>
            @endauth

            <livewire:welcome-users-avatars lazy />
        </section>
    </main>
</x-welcome-layout>
