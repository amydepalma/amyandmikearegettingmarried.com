/**
 * Custom block styles
 */
wp.domReady(() => {

  // Buttons
  wp.blocks.registerBlockStyle("core/button", [
    {
      name: "text-only",
      label: "Text Only",
    },
    {
      name: "arrow-after",
      label: "After: Arrow",
    },
    {
      name: "arrow-before-text",
      label: "Before: Arrow (Text Only)",
    },
    {
      name: "article-before-text",
      label: "Before: Article (Text Only)",
    },
    {
      name: "pdf-before",
      label: "Before: PDF",
    },
    {
      name: "pdf-before-text",
      label: "Before: PDF (Text Only)",
    }
  ]);

  // Cover
  wp.blocks.registerBlockStyle("core/cover", [
    {
      name: "us-bkg-right--sm",
      label: "US. Bkg (Right)(Small)",
    },
    {
      name: "us-bkg-right--lg",
      label: "US. Bkg (Right)(Large)",
    },
    {
      name: "us-bkg-right--xl",
      label: "US. Bkg (Right)(XL)",
    },
    {
      name: "us-bkg-left--sm",
      label: "US. Bkg (Left)(Small)",
    },
    {
      name: "us-bkg-left--lg",
      label: "US. Bkg (Left)(Large)",
    },
    {
      name: "us-bkg-left--xl",
      label: "US. Bkg (Left)(XL)",
    },
    {
      name: "us-bkg-center",
      label: "US. Bkg (Center)(XXL)",
    }
  ]);

  // Separator
  wp.blocks.unregisterBlockStyle("core/separator", [ "wide", "dots" ]);
  wp.blocks.registerBlockStyle("core/separator", [
    {
      name: "hr-medium",
      label: "Medium",
    },
    {
      name: "hr-thick",
      label: "Thick",
    }
  ]);

  // Image
  wp.blocks.unregisterBlockStyle("core/image", [ "rounded" ]);
  wp.blocks.registerBlockStyle("core/image", [
    {
      name: "centered",
      label: "Centered Caption",
    }, {
      name: "button-caption",
      label: "Caption as Button",
    },
  ]);

  // Lists
  wp.blocks.registerBlockStyle("core/list", [
    {
      name: "list-two-columns",
      label: "Two Columns",
    },
    {
      name: "list-three-columns",
      label: "Three Columns",
    },
    {
      name: "list-four-columns",
      label: "Four Columns",
    },
  ]);

  // Table
  wp.blocks.registerBlockStyle("core/table", [
    {
      name: "narrow",
      label: "Narrow"
    },
  ]);

  // YouTube Embed
  wp.blocks.registerBlockStyle("core/embed", [
    {
      name: "embed-rounded",
      label: "Rounded",
    },
    {
      name: "embed-rounded-shadow",
      label: "Rounded w/ Shadow",
    },
    {
      name: "embed-shadow",
      label: "Shadow",
    }
  ]);

  // Column Grid Styles
  wp.blocks.unregisterBlockStyle("core/group", [ "default" ]);
  wp.blocks.registerBlockStyle("core/group", [
    {
      name: "w-100",
      label: "100% Width",
      isDefault: true
    },
    {
      name: "w-auto",
      label: "Auto Width"
    },
    {
      name: "columns-auto",
      label: "Grid Auto"
    },
    {
      name: "columns-2x",
      label: "Grid 2x"
    },
    {
      name: "columns-3x",
      label: "Grid 3x"
    },
    {
      name: "columns-4x",
      label: "Grid 4x"
    },
    {
      name: "columns-60-40",
      label: "Grid 60/40"
    },
    {
      name: "columns-40-60",
      label: "Grid 40/60"
    },
    {
      name: "columns-65-35",
      label: "Grid 65/35"
    },
    {
      name: "columns-35-65",
      label: "Grid 35/65"
    },
    {
      name: "columns-55-45",
      label: "Grid 55/45"
    },
    {
      name: "columns-45-55",
      label: "Grid 45/55"
    },
    {
      name: "columns-70-30",
      label: "Grid 70/30"
    },
    {
      name: "columns-30-70",
      label: "Grid 30/70"
    },
    {
      name: "columns-75-25",
      label: "Grid 75/25"
    },
    {
      name: "columns-25-75",
      label: "Grid 25/75"
    },
    {
      name: "columns-featured-center",
      label: "Grid 3x w/ Featured Center"
    },
    {
      name: "columns-featured",
      label: "Grid Featured"
    }
  ]);
});
