require("./bootstrap");

require("alpinejs");

import Choices from "choices.js";

//create multi select elements

window.Choices = (Element) => {
    return new Choices(Element, {
        maxItemCount: 3,
        removeItemButton: true,
    });
};
