// Welcome to Cypress!
//
// To learn more about how Cypress works and
// what makes it such an awesome testing tool,
// please read our getting started guide:
// https://on.cypress.io/introduction-to-cypress

describe('Assessment Requirements', () => {
    beforeEach(() => {
        Cypress.Cookies.debug(true)

        cy.visit('http://localhost:8080')

        cy.clearCookies()
    })

    it('Has 4 divs', () => {
        cy.get('.divitem').should('have.length', 4)
    })

    it('Has #div1 with valid starting styles', () => {
        cy.viewport(1000, 1000)

        cy.get('#div1')
            .should('be.visible')

        // Div #1 should have a background image
        cy.get('#div1')
            .invoke('css', 'background-image')
            .should('contain', 'http://www.androidguys.com/wp-content/uploads/2016/01/summer-sunset-293095.jpg')

        // Div #1 should have a background image size of cover
        cy.get('#div1')
            .invoke('css', 'background-size')
            .should('contain.any', ['cover', '100%'])

        // Should be 25% of width of viewport
        cy.get('#div1')
            .invoke('outerWidth')
            .should('equal', 250)

        // Should be 25% of height of viewport
        cy.get('#div1')
            .invoke('outerHeight')
            .should('equal', 250)
    })

    it('Has #div2 with valid starting styles', () => {
        cy.viewport(1000, 1000)

        cy.get('#div2')
            .should('be.visible')

        // Div #2 should have a background color of orange
        cy.get('#div2')
            .invoke('css', 'background-color')
            .should('be.oneOf', ['orange', 'rgb(255, 165, 0)'])

        // Div #1 should have a background image size of cover
        cy.get('#div2 img')
            .invoke('attr', 'src')
            .should('be.oneOf', [
                'http://icons.iconarchive.com/icons/zairaam/bumpy-planets/256/07-jupiter-icon.png',
                'http://www.princeton.edu/~willman/planetary_systems/Sol/Saturn/Saturn.gif',
                'http://www.solstation.com/stars/venus.gif',
                'https://mars.nasa.gov/images/flckrEclipse-full2.jpg'
            ])

        // Should be 75% of width of viewport
        cy.get('#div2')
            .invoke('outerWidth')
            .should('equal', 750)

        // Should be 25% of height of viewport
        cy.get('#div2')
            .invoke('outerHeight')
            .should('equal', 250)
    })

    it('Has #div3 with valid starting styles', () => {
        cy.viewport(1000, 1000)

        cy.get('#div3')
            .should('be.visible')

        // Div #2 should have a background color of orange
        cy.get('#div3')
            .invoke('css', 'background-color')
            .should('be.oneOf', ['blue', 'rgb(0, 0, 255)'])

        // Should be 50% of width of viewport
        cy.get('#div3')
            .invoke('outerWidth')
            .should('equal', 500)

        // Should be 25% of height of viewport
        cy.get('#div3')
            .invoke('outerHeight')
            .should('equal', 250)

        cy.viewport(600, 1000)
        cy.get('#div3')
            .should('not.be.visible')


        cy.viewport(599, 1000)
        cy.get('#div3')
            .should('not.be.visible')
    })

    it('Has #div4 with valid starting styles', () => {
        cy.viewport(1000, 1000)

        cy.get('#div4')
            .should('be.visible')

        // Div #2 should have a background color of orange
        cy.get('#div4')
            .invoke('css', 'background-color')
            .should('be.oneOf', ['yellow', 'rgb(255, 255, 0)'])

        // Should have the number string '1 3 5 7 9 7 5 3 1'
        cy.get('#div4')
            .invoke('text')
            .should('match', /1\s*3\s*5\s*7\s*9\s*7\s*5\s*3\s*1/g)

        // Should be 90% of width of viewport
        cy.get('#div4')
            .invoke('outerWidth')
            .should('equal', 900)

        // Should be 25% of height of viewport
        cy.get('#div4')
            .invoke('outerHeight')
            .should('equal', 250)

        cy.viewport(600, 1000)
        cy.get('#div4')
            .should('not.be.visible')


        cy.viewport(599, 1000)
        cy.get('#div4')
            .should('not.be.visible')
    })

    it('Should have divs that toggle colors and size', () => {
        cy.viewport(1000, 1000)

        cy.intercept(/\/(index\.php)?/).as('div1Save')
        cy.get('#div1')
            .click()
            .invoke('outerWidth')
            .should('equal', 1000)
        cy.wait('@div1Save')

        cy.intercept(/\/(index\.php)?/).as('div2Save')
        cy.get('#div2')
            .click()
            .invoke('outerWidth')
            .should('equal', 1000)
        cy.wait('@div2Save')

        cy.intercept(/\/(index\.php)?/).as('div3Save')
        cy.get('#div3')
            .click()
            .invoke('outerWidth')
            .should('equal', 1000)
        cy.wait('@div3Save')

        cy.intercept(/\/(index\.php)?/).as('div4Save')
        cy.get('#div4')
            .click()
            .invoke('outerWidth')
            .should('equal', 1000)
        cy.wait('@div4Save')

        cy.reload()

        cy.getCookies().should('not.be.empty')

        cy.get('#div1')
            .invoke('outerWidth')
            .should('equal', 1000)

        cy.get('#div2')
            .invoke('outerWidth')
            .should('equal', 1000)

        cy.get('#div3')
            .invoke('outerWidth')
            .should('equal', 1000)

        cy.get('#div3')
            .invoke('css', 'background-color')
            .should('be.oneOf', ['red', 'rgb(255, 0, 0)'])

        cy.get('#div4')
            .invoke('outerWidth')
            .should('equal', 1000)
    })
})
