<style>
    /* Smooth accordion animation transitions */
    .accordion-content {
        transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s ease-in-out;
        max-height: 2000px;
        opacity: 1;
        overflow: hidden;
    }

    .accordion-content.collapsed {
        max-height: 0;
        opacity: 0;
    }

    .chevron-icon {
        transition: transform 0.3s ease;
    }

    .chevron-icon.rotated {
        transform: rotate(180deg);
    }
</style>