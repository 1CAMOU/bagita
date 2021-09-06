@props(['name'])

@if ($name === 'arrow-down')
    <svg {{ $attributes }} width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292787 0.305288C0.480314 0.117817 0.734622 0.0125018 0.999786 0.0125018C1.26495 0.0125018 1.51926 0.117817 1.70679 0.305288L4.99979 3.59829L8.29279 0.305288C8.38503 0.209778 8.49538 0.133596 8.61738 0.0811869C8.73939 0.0287779 8.87061 0.00119157 9.00339 3.77571e-05C9.13616 -0.00111606 9.26784 0.0241854 9.39074 0.0744663C9.51364 0.124747 9.62529 0.199 9.71918 0.292893C9.81307 0.386786 9.88733 0.498438 9.93761 0.621334C9.98789 0.744231 10.0132 0.87591 10.012 1.00869C10.0109 1.14147 9.9833 1.27269 9.93089 1.39469C9.87848 1.5167 9.8023 1.62704 9.70679 1.71929L5.70679 5.71929C5.51926 5.90676 5.26495 6.01207 4.99979 6.01207C4.73462 6.01207 4.48031 5.90676 4.29279 5.71929L0.292787 1.71929C0.105316 1.53176 0 1.27745 0 1.01229C0 0.747124 0.105316 0.492816 0.292787 0.305288Z" fill="#383E66"/>
    </svg>
@elseif ($name === 'search')
    <svg {{ $attributes }} width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.75 13.875L9.5 9.625L13.75 13.875ZM10.9167 6.08333C10.9167 6.73447 10.7884 7.37923 10.5392 7.98081C10.2901 8.58238 9.92483 9.12898 9.4644 9.5894C9.00398 10.0498 8.45738 10.4151 7.85581 10.6642C7.25423 10.9134 6.60947 11.0417 5.95833 11.0417C5.3072 11.0417 4.66243 10.9134 4.06086 10.6642C3.45929 10.4151 2.91269 10.0498 2.45226 9.5894C1.99184 9.12898 1.62661 8.58238 1.37743 7.98081C1.12825 7.37923 1 6.73447 1 6.08333C1 4.7683 1.52239 3.50713 2.45226 2.57726C3.38213 1.64739 4.6433 1.125 5.95833 1.125C7.27336 1.125 8.53454 1.64739 9.4644 2.57726C10.3943 3.50713 10.9167 4.7683 10.9167 6.08333Z" stroke="#383E66" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
@elseif ($name === 'locked')
    <svg {{ $attributes }} width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
    </svg>
@elseif ($name === 'shield-check')
    <svg {{ $attributes }} width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
    </svg>
@endif