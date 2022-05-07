<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#173a68] hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500'  ]) }}>
    {{ $slot }}
</button>
