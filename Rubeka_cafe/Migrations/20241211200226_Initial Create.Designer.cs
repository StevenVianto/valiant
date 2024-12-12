﻿// <auto-generated />
using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Migrations;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using Rubeka_cafe.Models;

#nullable disable

namespace Rubeka_cafe.Migrations
{
    [DbContext(typeof(rDbContext))]
    [Migration("20241211200226_Initial Create")]
    partial class InitialCreate
    {
        /// <inheritdoc />
        protected override void BuildTargetModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("ProductVersion", "9.0.0")
                .HasAnnotation("Relational:MaxIdentifierLength", 128);

            SqlServerModelBuilderExtensions.UseIdentityColumns(modelBuilder);

            modelBuilder.Entity("Rubeka_cafe.Models.Gallery", b =>
                {
                    b.Property<int>("IdGallery")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int");

                    SqlServerPropertyBuilderExtensions.UseIdentityColumn(b.Property<int>("IdGallery"));

                    b.Property<DateTime>("DateUpload")
                        .HasColumnType("datetime2");

                    b.Property<string>("NamePicture")
                        .IsRequired()
                        .HasColumnType("nvarchar(250)");

                    b.Property<float>("SizePicture")
                        .HasColumnType("real");

                    b.HasKey("IdGallery");

                    b.ToTable("Galleries");
                });
#pragma warning restore 612, 618
        }
    }
}