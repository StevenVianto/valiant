using Microsoft.EntityFrameworkCore;

namespace Rubeka_cafe.Models
{
    public class rDbContext : DbContext
    {
        public rDbContext(DbContextOptions<rDbContext> options) : base(options) { }

        public DbSet<Gallery> Galleries { get; set; }

        public DbSet<Menu> Menus { get; set; }

        public DbSet<User> Users { get; set; }

    }
}
