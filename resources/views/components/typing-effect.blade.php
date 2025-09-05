<div class="text-3xl font-semibold"
     x-data="typingEffect({{ json_encode($words ?? ['youtuber','blogger','freelancer','developer']) }})"
     x-init="startTyping()">
  And I’m a
  <span x-text="displayText" class="text-blue-600 cursor"></span>
</div>

@once
  <style>
    .cursor::after {
      content: '|';
      animation: blink 1s step-start infinite;
      margin-left: 2px;
    }

    @keyframes blink {
      0%, 100% { opacity: 0; }
      50% { opacity: 1; }
    }
  </style>

  <script src="//unpkg.com/alpinejs" defer></script>
  <script>
    function typingEffect(words) {
      return {
        words: words,
        displayText: '',
        wordIndex: 0,
        charIndex: 0,
        isDeleting: false,

        startTyping() {
          this.type();
        },

        type() {
          const currentWord = this.words[this.wordIndex];

          if (this.isDeleting) {
            this.charIndex--;
            this.displayText = currentWord.substring(0, this.charIndex);
          } else {
            this.charIndex++;
            this.displayText = currentWord.substring(0, this.charIndex);
          }

          let delay = this.isDeleting ? 40 : 80;

          if (!this.isDeleting && this.charIndex === currentWord.length) {
            delay = 1000;
            this.isDeleting = true;
          } else if (this.isDeleting && this.charIndex === 0) {
            this.isDeleting = false;
            this.wordIndex = (this.wordIndex + 1) % this.words.length;
            delay = 300;
          }

          setTimeout(() => this.type(), delay);
        }
      }
    }
  </script>
@endonce
