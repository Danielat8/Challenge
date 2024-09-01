<button style="background-color: #1d4ed8; border-color: transparent; color: white; border-radius: 0.375rem; padding: 0.5rem 1rem; font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; transition: background-color 150ms ease-in-out;"
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center']) }}>
    {{ $slot }}
</button>