import docsearch from '@docsearch/js';

import '@docsearch/css';

docsearch({
    container: '#docsearch',
    appId: 'DO4PVW94TB',
    indexName: 'bukus',
    apiKey: '68be649b56541a3aaaede24445f22bf2',
    recordExtractor: ({ $, helpers }) => {
        return helpers.docsearch({
            recordProps: {
                lvl0: {
                    // It also supports the fallback DOM selectors syntax!
                    selectors: ".exists-probably h1",
                    defaultValue: "myRawTextIfDoesNotExists",
                },
                lvl1: "article h2",
                lvl2: "article h3",
                lvl3: "article h4",
                lvl4: "article h5",
                lvl5: "article h6",
                content: "main p, main li",
                // The variables below can be used to filter your search
                language: {
                    // It also supports the fallback DOM selectors syntax!
                    selectors: ".exists-probably .language",
                    // Since custom variables are used for filtering, we allow sending
                    // multiple raw values
                    defaultValue: ["en", "en-US"],
                },
            },
        });
    },
    transformItems(items) {
        return items.map((item) => ({
            ...item,
            content: item.content.toUpperCase(),
        }));
    },
});
